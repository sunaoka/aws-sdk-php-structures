<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteIngestionDestination;

trait DeleteIngestionDestinationTrait
{
    /**
     * @param DeleteIngestionDestinationRequest $args
     * @return DeleteIngestionDestinationResponse
     */
    public function deleteIngestionDestination(DeleteIngestionDestinationRequest $args)
    {
        $result = parent::deleteIngestionDestination($args->toArray());
        return new DeleteIngestionDestinationResponse($result->toArray());
    }
}
