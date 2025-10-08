<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination;

trait UpdateIngestionDestinationTrait
{
    /**
     * @param UpdateIngestionDestinationRequest $args
     * @return UpdateIngestionDestinationResponse
     */
    public function updateIngestionDestination(UpdateIngestionDestinationRequest $args)
    {
        $result = parent::updateIngestionDestination($args->toArray());
        return new UpdateIngestionDestinationResponse($result->toArray());
    }
}
