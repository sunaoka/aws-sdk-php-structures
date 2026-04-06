<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliveryDestination;

trait PutDeliveryDestinationTrait
{
    /**
     * @param PutDeliveryDestinationRequest $args
     * @return PutDeliveryDestinationResponse
     */
    public function putDeliveryDestination(PutDeliveryDestinationRequest $args)
    {
        $result = parent::putDeliveryDestination($args->toArray());
        return new PutDeliveryDestinationResponse($result->toArray());
    }
}
