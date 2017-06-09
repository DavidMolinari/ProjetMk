<?php

/**
 * Created by IntelliJ IDEA.
 * User: Davvm
 * Date: 09/06/2017
 * Time: 16:46
 */
require_once 'vendor/autoload.php';

class Calculateur_TEG
{

    private $capital;
    private $periode;
    private $frequence = '12';
    private $valeurEcheance;
    private $primeAssurance;
    private $chargements;
    private $tauxEffectif;
    private $tauxDouble;

    /**
     * @return mixed
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param mixed $capital
     */
    public function setCapital(string $capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return mixed
     */
    public function getPeriode() : int
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode(int $periode)
    {
        $this->periode = $periode;
    }

    /**
     * @return string
     */
    public function getFrequence(): string
    {
        return $this->frequence;
    }

    /**
     * @param string $frequence
     */
    public function setFrequence(string $frequence)
    {
        $this->frequence = $frequence;
    }

    /**
     * @return mixed
     */
    public function getValeurEcheance() : string
    {
        return $this->valeurEcheance;
    }

    /**
     * @param mixed $valeurEcheance
     */
    public function setValeurEcheance(string $valeurEcheance)
    {
        $this->valeurEcheance = $valeurEcheance;
    }

    /**
     * @return mixed
     */
    public function getPrimeAssurance() : string
    {
        return $this->primeAssurance;
    }

    /**
     * @param mixed $primeAssurance
     */
    public function setPrimeAssurance(string $primeAssurance)
    {
        $this->primeAssurance = $primeAssurance;
    }

    /**
     * @return mixed
     */
    public function getChargements() : string
    {
        return $this->chargements;
    }

    /**
     * @param mixed $chargements
     */
    public function setChargements(string $chargements)
    {
        $this->chargements = $chargements;
    }

    /**
     * @return mixed
     */
    public function getTauxEffectif() : string
    {
        return $this->tauxEffectif;
    }

    /**
     * @param mixed $tauxEffectif
     */
    public function setTauxEffectif(string $tauxEffectif)
    {
        $this->tauxEffectif = $tauxEffectif;
    }

    /**
     * @return mixed
     */
    public function getTauxDouble() : decimal
    {
        return $this->tauxDouble;
    }

    /**
     * @param mixed $tauxDouble
     */
    public function setTauxDouble(decimal $tauxDouble)
    {
        $this->tauxDouble = $tauxDouble;
    }

}