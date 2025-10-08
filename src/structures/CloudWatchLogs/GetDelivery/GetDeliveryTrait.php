<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDelivery;

trait GetDeliveryTrait
{
    /**
     * @param GetDeliveryRequest $args
     * @return GetDeliveryResponse
     */
    public function getDelivery(GetDeliveryRequest $args)
    {
        $result = parent::getDelivery($args->toArray());
        return new GetDeliveryResponse($result->toArray());
    }
}
