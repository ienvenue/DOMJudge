<?php

namespace Proxies\__CG__\DOMJudgeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InternalError extends \DOMJudgeBundle\Entity\InternalError implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'errorid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judgingid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'cid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'description', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judgehostlog', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'time', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'disabled', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'status', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'contest', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judging'];
        }

        return ['__isInitialized__', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'errorid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judgingid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'cid', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'description', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judgehostlog', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'time', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'disabled', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'status', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'contest', '' . "\0" . 'DOMJudgeBundle\\Entity\\InternalError' . "\0" . 'judging'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InternalError $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setErrorid($errorid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setErrorid', [$errorid]);

        return parent::setErrorid($errorid);
    }

    /**
     * {@inheritDoc}
     */
    public function getErrorid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getErrorid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getErrorid', []);

        return parent::getErrorid();
    }

    /**
     * {@inheritDoc}
     */
    public function setJudgingid($judgingid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJudgingid', [$judgingid]);

        return parent::setJudgingid($judgingid);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgingid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgingid', []);

        return parent::getJudgingid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCid($cid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCid', [$cid]);

        return parent::setCid($cid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCid', []);

        return parent::getCid();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setJudgehostlog($judgehostlog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJudgehostlog', [$judgehostlog]);

        return parent::setJudgehostlog($judgehostlog);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudgehostlog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudgehostlog', []);

        return parent::getJudgehostlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setTime($time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTime', [$time]);

        return parent::setTime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTime', []);

        return parent::getTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisabled($disabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisabled', [$disabled]);

        return parent::setDisabled($disabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisabled', []);

        return parent::getDisabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setContest(\DOMJudgeBundle\Entity\Contest $contest = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContest', [$contest]);

        return parent::setContest($contest);
    }

    /**
     * {@inheritDoc}
     */
    public function getContest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContest', []);

        return parent::getContest();
    }

    /**
     * {@inheritDoc}
     */
    public function setJudging(\DOMJudgeBundle\Entity\Judging $judging = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJudging', [$judging]);

        return parent::setJudging($judging);
    }

    /**
     * {@inheritDoc}
     */
    public function getJudging()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJudging', []);

        return parent::getJudging();
    }

}
