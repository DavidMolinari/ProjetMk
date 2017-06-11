<?php

/**
 * Created by IntelliJ IDEA.
 * User: Davvm
 * Date: 09/06/2017
 * Time: 16:46
 */
require_once 'vendor/autoload.php';
use Litipk\BigNumbers\Decimal;

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


    public function calculer(){


        $frequenceBd = Decimal::fromString($this->getFrequence());
        $taux = Decimal::fromString('0.00255485684214703598', Utils::$precision);
        $tauxEquivalent = Decimal::fromString('0', Utils::$precision);
        $un = Decimal::fromString('1', Utils::$precision);
        $cent = Decimal::fromString('100', Utils::$precision);
        $tauxEquivalent = $taux;
        $taux = $cent->mul($taux);

        if($this->getTauxEffectif() == "TEG"){
            $taux = $taux->mul($frequenceBd);
            $taux->round(2);
            $this->setTauxDouble($taux);
        } else {
            $tauxEquivalent = $un->add($tauxEquivalent);
            $tauxEquivalent = $tauxEquivalent->pow($frequenceBd->asInteger());
            $tauxEquivalent = $tauxEquivalent->sub($un);
            $tauxEquivalent = $cent->mul($tauxEquivalent);
            $tauxEquivalent->round(2);
            $this->setTauxDouble($tauxEquivalent);
        }

        return $this->getTauxDouble();
    }

}