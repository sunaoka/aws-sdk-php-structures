<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteDestination;

trait DeleteDestinationTrait
{
    /**
     * @param DeleteDestinationRequest $args
     * @return DeleteDestinationResponse
     */
    public function deleteDestination(DeleteDestinationRequest $args)
    {
        $result = parent::deleteDestination($args->toArray());
        return new DeleteDestinationResponse($result->toArray());
    }
}
