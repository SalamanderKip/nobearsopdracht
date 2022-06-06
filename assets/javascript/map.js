const address = document.getElementById("address");
const centerview = [52.162280, 5.091440];
const mymap = L.map('isMap', { scrollWheelZoom: true, tap: true }).setView([centerview[0], centerview[1]], 8);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);
const layerGroup = L.layerGroup().addTo(mymap);
address.addEventListener('input', e => {
    const query = "http://localhost:8080/search/?q=" + address.value;
    fetch(query, { method: 'get' })
        .then(r => r.json())
        .then(r => {
            layerGroup.clearLayers();
            r.features.forEach(element => {
                let coords = element.geometry.coordinates;
                L.marker([coords[1], coords[0]]).addTo(layerGroup);
            });
        })
})