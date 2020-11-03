<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $adr1;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $adr2;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $codepos;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ville;

    /**
     * @ORM\ManyToMany(targetEntity=Sav::class, inversedBy="clients")
     */
    private $sav;

    public function __construct()
    {
        $this->sav = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdr1(): ?string
    {
        return $this->adr1;
    }

    public function setAdr1(string $adr1): self
    {
        $this->adr1 = $adr1;

        return $this;
    }

    public function getAdr2(): ?string
    {
        return $this->adr2;
    }

    public function setAdr2(?string $adr2): self
    {
        $this->adr2 = $adr2;

        return $this;
    }

    public function getCodepos(): ?string
    {
        return $this->codepos;
    }

    public function setCodepos(string $codepos): self
    {
        $this->codepos = $codepos;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Sav[]
     */
    public function getSav(): Collection
    {
        return $this->sav;
    }

    public function addSav(Sav $sav): self
    {
        if (!$this->sav->contains($sav)) {
            $this->sav[] = $sav;
        }

        return $this;
    }

    public function removeSav(Sav $sav): self
    {
        $this->sav->removeElement($sav);

        return $this;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}
