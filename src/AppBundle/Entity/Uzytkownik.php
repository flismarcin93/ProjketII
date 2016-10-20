<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownik
 *
 * @ORM\Table(name="uzytkownik")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UzytkownikRepository")
 */
class Uzytkownik
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="haslo", type="string", length=255)
     */
    private $haslo;

    /**
     * @var int
     *
     * @ORM\Column(name="typkonta", type="integer")
     */
    private $typkonta;


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
     * @return Uzytkownik
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
     * Set login
     *
     * @param string $login
     *
     * @return Uzytkownik
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set haslo
     *
     * @param string $haslo
     *
     * @return Uzytkownik
     */
    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;

        return $this;
    }

    /**
     * Get haslo
     *
     * @return string
     */
    public function getHaslo()
    {
        return $this->haslo;
    }

    /**
     * Set typkonta
     *
     * @param integer $typkonta
     *
     * @return Uzytkownik
     */
    public function setTypkonta($typkonta)
    {
        $this->typkonta = $typkonta;

        return $this;
    }

    /**
     * Get typkonta
     *
     * @return int
     */
    public function getTypkonta()
    {
        return $this->typkonta;
    }
}
