<?php

namespace Sunaoka\Aws\Structures\Organizations\DeclineHandshake;

trait DeclineHandshakeTrait
{
    /**
     * @param DeclineHandshakeRequest $args
     * @return DeclineHandshakeResponse
     */
    public function declineHandshake(DeclineHandshakeRequest $args)
    {
        $result = parent::declineHandshake($args->toArray());
        return new DeclineHandshakeResponse($result->toArray());
    }
}
