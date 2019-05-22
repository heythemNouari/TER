<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * @ORM\Entity(repositoryClass="App\Repository\CloisonsRepository")
=======
 * @ORM\Entity(repositoryClass="App\Repository\CloisonRepository")
>>>>>>> b34e2a4f66f178e2d3b4e5304cd49a9e3700af3a
 */
class Cloison
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsAmovibles;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsSeches;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsPiecesHumides;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsVerre;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsJaponaises;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $claustraInterieur;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsVitreesStyleAtelier;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $cloisonsVegetales;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCloisonsAmovibles(): ?float
    {
        return $this->cloisonsAmovibles;
    }

    public function setCloisonsAmovibles(?float $cloisonsAmovibles): self
    {
        $this->cloisonsAmovibles = $cloisonsAmovibles;

        return $this;
    }

    public function getCloisonsSeches(): ?float
    {
        return $this->cloisonsSeches;
    }

    public function setCloisonsSeches(?float $cloisonsSeches): self
    {
        $this->cloisonsSeches = $cloisonsSeches;

        return $this;
    }

    public function getCloisonsPiecesHumides(): ?float
    {
        return $this->cloisonsPiecesHumides;
    }

    public function setCloisonsPiecesHumides(?float $cloisonsPiecesHumides): self
    {
        $this->cloisonsPiecesHumides = $cloisonsPiecesHumides;

        return $this;
    }

    public function getCloisonsVerre(): ?float
    {
        return $this->cloisonsVerre;
    }

    public function setCloisonsVerre(?float $cloisonsVerre): self
    {
        $this->cloisonsVerre = $cloisonsVerre;

        return $this;
    }

    public function getCloisonsJaponaises(): ?float
    {
        return $this->cloisonsJaponaises;
    }

    public function setCloisonsJaponaises(?float $cloisonsJaponaises): self
    {
        $this->cloisonsJaponaises = $cloisonsJaponaises;

        return $this;
    }

    public function getClaustraInterieur(): ?float
    {
        return $this->claustraInterieur;
    }

    public function setClaustraInterieur(?float $claustraInterieur): self
    {
        $this->claustraInterieur = $claustraInterieur;

        return $this;
    }

    public function getCloisonsVitreesStyleAtelier(): ?float
    {
        return $this->cloisonsVitreesStyleAtelier;
    }

    public function setCloisonsVitreesStyleAtelier(?float $cloisonsVitreesStyleAtelier): self
    {
        $this->cloisonsVitreesStyleAtelier = $cloisonsVitreesStyleAtelier;

        return $this;
    }

    public function getCloisonsVegetales(): ?float
    {
        return $this->cloisonsVegetales;
    }

    public function setCloisonsVegetales(?float $cloisonsVegetales): self
    {
        $this->cloisonsVegetales = $cloisonsVegetales;

        return $this;
    }
}
