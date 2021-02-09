<?php


class Maison extends Habitation {

    private bool $jardin;
    public int $etages;
    public bool $garage;

    /**
     * Maison constructor.
     * @param string $pays
     * @param string $ville
     * @param string $codePostal
     * @param string $chambres
     * @param string $pieces
     * @param bool $jardin
     * @param int $etages
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, string $codePostal, string $chambres, string $pieces, bool $jardin, int $etages, bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setJardin($jardin);
        $this->setEtages($etages);
        $this->setGarage($garage);
    }

    /**
     * return si jardin ou pas
     * @return bool
     */
    public function hasJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * set jardin true ou false
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * return le nombre d'etages
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * set le nombre d'etages
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * return si garage ou pas
     * @return bool
     */
    public function hasGarage(): bool
    {
        return $this->garage;
    }

    /**
     * set garage true ou false
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}