<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartEventDataStoreIngestion;

trait StartEventDataStoreIngestionTrait
{
    /**
     * @param StartEventDataStoreIngestionRequest $args
     * @return StartEventDataStoreIngestionResponse
     */
    public function startEventDataStoreIngestion(StartEventDataStoreIngestionRequest $args)
    {
        $result = parent::startEventDataStoreIngestion($args->toArray());
        return new StartEventDataStoreIngestionResponse($result->toArray());
    }
}
