<?php

namespace Sunaoka\Aws\Structures\MTurk\SendBonus;

trait SendBonusTrait
{
    /**
     * @param SendBonusRequest $args
     * @return SendBonusResponse
     */
    public function sendBonus(SendBonusRequest $args)
    {
        $result = parent::sendBonus($args->toArray());
        return new SendBonusResponse($result->toArray());
    }
}
