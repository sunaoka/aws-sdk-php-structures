<?php

namespace Sunaoka\Aws\Structures\Organizations\CancelHandshake;

trait CancelHandshakeTrait
{
    /**
     * @param CancelHandshakeRequest $args
     * @return CancelHandshakeResponse
     */
    public function cancelHandshake(CancelHandshakeRequest $args)
    {
        $result = parent::cancelHandshake($args->toArray());
        return new CancelHandshakeResponse($result->toArray());
    }
}
