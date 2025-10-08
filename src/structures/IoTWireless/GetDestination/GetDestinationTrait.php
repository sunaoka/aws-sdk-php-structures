<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDestination;

trait GetDestinationTrait
{
    /**
     * @param GetDestinationRequest $args
     * @return GetDestinationResponse
     */
    public function getDestination(GetDestinationRequest $args)
    {
        $result = parent::getDestination($args->toArray());
        return new GetDestinationResponse($result->toArray());
    }
}
