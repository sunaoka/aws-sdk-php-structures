<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StopEventDataStoreIngestion;

trait StopEventDataStoreIngestionTrait
{
    /**
     * @param StopEventDataStoreIngestionRequest $args
     * @return StopEventDataStoreIngestionResponse
     */
    public function stopEventDataStoreIngestion(StopEventDataStoreIngestionRequest $args)
    {
        $result = parent::stopEventDataStoreIngestion($args->toArray());
        return new StopEventDataStoreIngestionResponse($result->toArray());
    }
}
