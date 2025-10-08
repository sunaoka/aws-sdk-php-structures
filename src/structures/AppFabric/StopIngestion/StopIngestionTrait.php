<?php

namespace Sunaoka\Aws\Structures\AppFabric\StopIngestion;

trait StopIngestionTrait
{
    /**
     * @param StopIngestionRequest $args
     * @return StopIngestionResponse
     */
    public function stopIngestion(StopIngestionRequest $args)
    {
        $result = parent::stopIngestion($args->toArray());
        return new StopIngestionResponse($result->toArray());
    }
}
