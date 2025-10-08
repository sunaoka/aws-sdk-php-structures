<?php

namespace Sunaoka\Aws\Structures\Ses\SendBounce;

trait SendBounceTrait
{
    /**
     * @param SendBounceRequest $args
     * @return SendBounceResponse
     */
    public function sendBounce(SendBounceRequest $args)
    {
        $result = parent::sendBounce($args->toArray());
        return new SendBounceResponse($result->toArray());
    }
}
