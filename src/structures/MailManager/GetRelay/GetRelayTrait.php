<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRelay;

trait GetRelayTrait
{
    /**
     * @param GetRelayRequest $args
     * @return GetRelayResponse
     */
    public function getRelay(GetRelayRequest $args)
    {
        $result = parent::getRelay($args->toArray());
        return new GetRelayResponse($result->toArray());
    }
}
