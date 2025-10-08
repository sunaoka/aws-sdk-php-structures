<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker;

trait CreateBrokerTrait
{
    /**
     * @param CreateBrokerRequest $args
     * @return CreateBrokerResponse
     */
    public function createBroker(CreateBrokerRequest $args)
    {
        $result = parent::createBroker($args->toArray());
        return new CreateBrokerResponse($result->toArray());
    }
}
