<?php

namespace Sunaoka\Aws\Structures\AppFabric\StartIngestion;

trait StartIngestionTrait
{
    /**
     * @param StartIngestionRequest $args
     * @return StartIngestionResponse
     */
    public function startIngestion(StartIngestionRequest $args)
    {
        $result = parent::startIngestion($args->toArray());
        return new StartIngestionResponse($result->toArray());
    }
}
