<?php

namespace Sunaoka\Aws\Structures\IoTWireless\UpdateDestination;

trait UpdateDestinationTrait
{
    /**
     * @param UpdateDestinationRequest $args
     * @return UpdateDestinationResponse
     */
    public function updateDestination(UpdateDestinationRequest $args)
    {
        $result = parent::updateDestination($args->toArray());
        return new UpdateDestinationResponse($result->toArray());
    }
}
