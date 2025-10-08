<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateRelay;

trait CreateRelayTrait
{
    /**
     * @param CreateRelayRequest $args
     * @return CreateRelayResponse
     */
    public function createRelay(CreateRelayRequest $args)
    {
        $result = parent::createRelay($args->toArray());
        return new CreateRelayResponse($result->toArray());
    }
}
