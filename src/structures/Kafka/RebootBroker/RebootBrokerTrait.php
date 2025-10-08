<?php

namespace Sunaoka\Aws\Structures\Kafka\RebootBroker;

trait RebootBrokerTrait
{
    /**
     * @param RebootBrokerRequest $args
     * @return RebootBrokerResponse
     */
    public function rebootBroker(RebootBrokerRequest $args)
    {
        $result = parent::rebootBroker($args->toArray());
        return new RebootBrokerResponse($result->toArray());
    }
}
