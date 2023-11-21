<?php

namespace App\Entity;

use App\Repository\VinlMixRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VinlMixRepository::class)]
class VinlMix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private int $votes = 0;

    private function _construct()
    {
        $this->createAt= new \DateTimeImmutable();

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVotes(): ?int
    {
        return $this->votes;
    }

    public function setVotes(int $votes): static
    {
        $this->votes = $votes;

        return $this;
    }
}
