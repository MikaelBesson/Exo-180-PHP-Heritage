<?php


class Habitation {

    public string $pays;
    public string $ville;
    public string $codePostal;
    public int $chambres;
    public int $pieces;

    /**
     * Habitation constructor.
     * @param string $pays
     * @param string $ville
     * @param string $codePostal
     * @param string $chambres
     * @param string $pieces
     */
    public function __construct(string $pays, string $ville, string $codePostal, string $chambres, string $pieces){
        $this->setPays($pays);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setChambres($chambres);
        $this->setPieces($pieces);

    }

    /**
     * return pays
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * set pays
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * return ville
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * set ville
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * return code postal
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * set code postal
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * return nombre de chambres
     * @return int
     */
    public function getChambres(): int
    {
        return $this->chambres;
    }

    /**
     * set nombres de chambres
     * @param int $chambres
     */
    public function setChambres(int $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * return nombres de pieces
     * @return int
     */
    public function getPieces(): int
    {
        return $this->pieces;
    }

    /**
     * set nombres de pieces
     * @param int $pieces
     */
    public function setPieces(int $pieces): void
    {
        $this->pieces = $pieces;
    }




}
