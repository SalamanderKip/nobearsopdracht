<?php

namespace App\Entity;

use App\Repository\BearRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BearRepository::class)]
class Bear
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 28)]
    private $col1;

    #[ORM\Column(type: 'string', length: 26)]
    private $col2;

    #[ORM\Column(type: 'string', length: 13)]
    private $col3;

    #[ORM\Column(type: 'decimal')]
    private $col4;

    #[ORM\Column(type: 'decimal')]
    private $col5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCol1(): ?string
    {
        return $this->col1;
    }

    public function setCol1(string $col1): self
    {
        $this->col1 = $col1;

        return $this;
    }

    public function getCol2(): ?string
    {
        return $this->col2;
    }

    public function setCol2(string $col2): self
    {
        $this->col2 = $col2;

        return $this;
    }

    public function getCol3(): ?string
    {
        return $this->col3;
    }

    public function setCol3(string $col3): self
    {
        $this->col3 = $col3;

        return $this;
    }

    public function getCol4(): ?float
    {
        return $this->col4;
    }

    public function setCol4(float $col4): self
    {
        $this->col4 = $col4;

        return $this;
    }

    public function getCol5(): ?float
    {
        return $this->col5;
    }

    public function setCol5(float $col5): self
    {
        $this->col5 = $col5;

        return $this;
    }
}
