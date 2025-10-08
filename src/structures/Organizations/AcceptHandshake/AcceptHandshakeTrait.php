<?php

namespace Sunaoka\Aws\Structures\Organizations\AcceptHandshake;

trait AcceptHandshakeTrait
{
    /**
     * @param AcceptHandshakeRequest $args
     * @return AcceptHandshakeResponse
     */
    public function acceptHandshake(AcceptHandshakeRequest $args)
    {
        $result = parent::acceptHandshake($args->toArray());
        return new AcceptHandshakeResponse($result->toArray());
    }
}
