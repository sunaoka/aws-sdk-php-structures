<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateDestination;

trait CreateDestinationTrait
{
    /**
     * @param CreateDestinationRequest $args
     * @return CreateDestinationResponse
     */
    public function createDestination(CreateDestinationRequest $args)
    {
        $result = parent::createDestination($args->toArray());
        return new CreateDestinationResponse($result->toArray());
    }
}
