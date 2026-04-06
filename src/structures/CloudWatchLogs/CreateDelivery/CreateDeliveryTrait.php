<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery;

trait CreateDeliveryTrait
{
    /**
     * @param CreateDeliveryRequest $args
     * @return CreateDeliveryResponse
     */
    public function createDelivery(CreateDeliveryRequest $args)
    {
        $result = parent::createDelivery($args->toArray());
        return new CreateDeliveryResponse($result->toArray());
    }
}
