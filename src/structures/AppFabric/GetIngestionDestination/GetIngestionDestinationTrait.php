<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination;

trait GetIngestionDestinationTrait
{
    /**
     * @param GetIngestionDestinationRequest $args
     * @return GetIngestionDestinationResponse
     */
    public function getIngestionDestination(GetIngestionDestinationRequest $args)
    {
        $result = parent::getIngestionDestination($args->toArray());
        return new GetIngestionDestinationResponse($result->toArray());
    }
}
