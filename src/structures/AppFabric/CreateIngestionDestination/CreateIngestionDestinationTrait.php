<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestionDestination;

trait CreateIngestionDestinationTrait
{
    /**
     * @param CreateIngestionDestinationRequest $args
     * @return CreateIngestionDestinationResponse
     */
    public function createIngestionDestination(CreateIngestionDestinationRequest $args)
    {
        $result = parent::createIngestionDestination($args->toArray());
        return new CreateIngestionDestinationResponse($result->toArray());
    }
}
