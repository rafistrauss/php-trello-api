<?php

namespace Trello\Event;

use Trello\Model\CardInterface;

class CardEvent extends AbstractEvent
{
    /**
     * @var CardInterface
     */
    protected $card;

    protected $previousListName;
    protected $nextListName;

    /**
     * @return mixed
     */
    public function getPreviousListName()
    {
        return $this->previousListName;
    }

    /**
     * @param mixed $previousListName
     */
    public function setPreviousListName($previousListName)
    {
        $this->previousListName = $previousListName;
    }

    /**
     * @return mixed
     */
    public function getNextListName()
    {
        return $this->nextListName;
    }

    /**
     * @param mixed $nextListName
     */
    public function setNextListName($nextListName)
    {
        $this->nextListName = $nextListName;
    }


    /**
     * Set card
     *
     * @param CardInterface $card
     */
    public function setCard(CardInterface $card)
    {
        $this->card = $card;
    }

    /**
     * Get card
     *
     * @return CardInterface
     */
    public function getCard()
    {
        return $this->card;
    }

}

