<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker;

trait UpdateBrokerTrait
{
    /**
     * @param UpdateBrokerRequest $args
     * @return UpdateBrokerResponse
     */
    public function updateBroker(UpdateBrokerRequest $args)
    {
        $result = parent::updateBroker($args->toArray());
        return new UpdateBrokerResponse($result->toArray());
    }
}
