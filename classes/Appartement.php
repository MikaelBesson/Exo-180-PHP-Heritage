<?php


class Appartement extends  Habitation {

    public bool $garage;

    /**
     * Appartement constructor.
     * @param string $pays
     * @param string $ville
     * @param string $codePostal
     * @param string $chambres
     * @param string $pieces
     * @param bool $garage
     */
    public function __construct(string $pays, string $ville, string $codePostal, string $chambres, string $pieces, bool $garage)
    {
        parent::__construct($pays, $ville, $codePostal, $chambres, $pieces);
        $this->setGarage($garage);
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