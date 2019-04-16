<?php

namespace Proxies\__CG__\DOMJudgeBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Clarification extends \DOMJudgeBundle\Entity\Clarification implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'clarid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'cid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'respid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'submittime', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'sender_id', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'recipient_id', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'jury_member', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'probid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'category', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'body', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'answered', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'problem', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'contest', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'in_reply_to', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'replies', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'sender', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'recipient'];
        }

        return ['__isInitialized__', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'clarid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'cid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'respid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'submittime', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'sender_id', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'recipient_id', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'jury_member', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'probid', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'category', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'body', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'answered', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'problem', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'contest', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'in_reply_to', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'replies', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'sender', '' . "\0" . 'DOMJudgeBundle\\Entity\\Clarification' . "\0" . 'recipient'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Clarification $proxy) {
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
    public function setClarid($clarid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClarid', [$clarid]);

        return parent::setClarid($clarid);
    }

    /**
     * {@inheritDoc}
     */
    public function getClarid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getClarid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClarid', []);

        return parent::getClarid();
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
    public function setRespid($respid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRespid', [$respid]);

        return parent::setRespid($respid);
    }

    /**
     * {@inheritDoc}
     */
    public function getRespid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRespid', []);

        return parent::getRespid();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmittime($submittime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmittime', [$submittime]);

        return parent::setSubmittime($submittime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmittime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmittime', []);

        return parent::getSubmittime();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenderId($senderId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenderId', [$senderId]);

        return parent::setSenderId($senderId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenderId', []);

        return parent::getSenderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipientId($recipientId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipientId', [$recipientId]);

        return parent::setRecipientId($recipientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipientId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipientId', []);

        return parent::getRecipientId();
    }

    /**
     * {@inheritDoc}
     */
    public function setJuryMember($juryMember)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJuryMember', [$juryMember]);

        return parent::setJuryMember($juryMember);
    }

    /**
     * {@inheritDoc}
     */
    public function getJuryMember()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJuryMember', []);

        return parent::getJuryMember();
    }

    /**
     * {@inheritDoc}
     */
    public function setProbid($probid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProbid', [$probid]);

        return parent::setProbid($probid);
    }

    /**
     * {@inheritDoc}
     */
    public function getProbid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProbid', []);

        return parent::getProbid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setBody($body)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBody', [$body]);

        return parent::setBody($body);
    }

    /**
     * {@inheritDoc}
     */
    public function getBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBody', []);

        return parent::getBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswered($answered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAnswered', [$answered]);

        return parent::setAnswered($answered);
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAnswered', []);

        return parent::getAnswered();
    }

    /**
     * {@inheritDoc}
     */
    public function setProblem(\DOMJudgeBundle\Entity\Problem $problem = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProblem', [$problem]);

        return parent::setProblem($problem);
    }

    /**
     * {@inheritDoc}
     */
    public function getProblem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProblem', []);

        return parent::getProblem();
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
    public function setInReplyTo(\DOMJudgeBundle\Entity\Clarification $inReplyTo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInReplyTo', [$inReplyTo]);

        return parent::setInReplyTo($inReplyTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getInReplyTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInReplyTo', []);

        return parent::getInReplyTo();
    }

    /**
     * {@inheritDoc}
     */
    public function addReply(\DOMJudgeBundle\Entity\Clarification $reply)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addReply', [$reply]);

        return parent::addReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function removeReply(\DOMJudgeBundle\Entity\Clarification $reply)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeReply', [$reply]);

        return parent::removeReply($reply);
    }

    /**
     * {@inheritDoc}
     */
    public function getReplies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReplies', []);

        return parent::getReplies();
    }

    /**
     * {@inheritDoc}
     */
    public function setSender(\DOMJudgeBundle\Entity\Team $sender = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSender', [$sender]);

        return parent::setSender($sender);
    }

    /**
     * {@inheritDoc}
     */
    public function getSender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSender', []);

        return parent::getSender();
    }

    /**
     * {@inheritDoc}
     */
    public function setRecipient(\DOMJudgeBundle\Entity\Team $recipient = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRecipient', [$recipient]);

        return parent::setRecipient($recipient);
    }

    /**
     * {@inheritDoc}
     */
    public function getRecipient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRecipient', []);

        return parent::getRecipient();
    }

}
