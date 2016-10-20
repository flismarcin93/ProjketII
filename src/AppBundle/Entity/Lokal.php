<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lokal
 *
 * @ORM\Table(name="lokal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LokalRepository")
 */
class Lokal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nazwa", type="string", length=255)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="kategoria", type="string", length=255)
     */
    private $kategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="text")
     */
    private $opis;

    /**
     * @ORM\OneToMany(targetEntity="Wydarzenie", mappedBy="lokal")
     */
protected $wydarzenia;
    public function __construct()
    {
        $this->wydarzenia=new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Lokal
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set kategoria
     *
     * @param string $kategoria
     *
     * @return Lokal
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return Lokal
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Add wydarzenium
     *
     * @param \AppBundle\Entity\Wydarzenie $wydarzenium
     *
     * @return Lokal
     */
    public function addWydarzenium(\AppBundle\Entity\Wydarzenie $wydarzenium)
    {
        $this->wydarzenia[] = $wydarzenium;

        return $this;
    }

    /**
     * Remove wydarzenium
     *
     * @param \AppBundle\Entity\Wydarzenie $wydarzenium
     */
    public function removeWydarzenium(\AppBundle\Entity\Wydarzenie $wydarzenium)
    {
        $this->wydarzenia->removeElement($wydarzenium);
    }

    /**
     * Get wydarzenia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWydarzenia()
    {
        return $this->wydarzenia;
    }
}
