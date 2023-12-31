<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\ManyToOne]
    private ?User $user = null;
    

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenuMessageAvis = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenuMessageAvis(): ?string
    {
        return $this->contenuMessageAvis;
    }

    public function setContenuMessageAvis(string $contenuMessageAvis): static
    {
        $this->contenuMessageAvis = $contenuMessageAvis;

        return $this;
    }
  /*   public function getUser(): ?User {
        return $this->user;
    }

    public function setUser(?User $user): ?User {
        $this->user = $user;
    } */
    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }
}
