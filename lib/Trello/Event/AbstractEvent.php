<?php

namespace Trello\Event;

use Symfony\Component\EventDispatcher\GenericEvent;

abstract class AbstractEvent extends GenericEvent
{
    /**
     * @var array
     */
    protected $requestData;

    /**
     * @var array
     */
    protected $memberCreator;

    /**
     * Set request data
     *
     * @param array $requestData
     */
    public function setRequestData(array $requestData)
    {
        $this->requestData = $requestData;
    }

    /**
     * Get request data
     *
     * @return array
     */
    public function getRequestData()
    {
        return $this->requestData;
    }

    /**
     * Set member creator
     *
     * @param array $memberCreator
     */
    public function setmemberCreator(array $memberCreator)
    {
        $this->memberCreator = $memberCreator;
    }

    /**
     * Get member creator
     *
     * @return array
     */
    public function getmemberCreator()
    {
        return $this->memberCreator;
    }


}
