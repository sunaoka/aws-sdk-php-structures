<?php

namespace Sunaoka\Aws\Structures\MQ\DeleteBroker;

trait DeleteBrokerTrait
{
    /**
     * @param DeleteBrokerRequest $args
     * @return DeleteBrokerResponse
     */
    public function deleteBroker(DeleteBrokerRequest $args)
    {
        $result = parent::deleteBroker($args->toArray());
        return new DeleteBrokerResponse($result->toArray());
    }
}
