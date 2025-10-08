<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestination;

trait GetDeliveryDestinationTrait
{
    /**
     * @param GetDeliveryDestinationRequest $args
     * @return GetDeliveryDestinationResponse
     */
    public function getDeliveryDestination(GetDeliveryDestinationRequest $args)
    {
        $result = parent::getDeliveryDestination($args->toArray());
        return new GetDeliveryDestinationResponse($result->toArray());
    }
}
