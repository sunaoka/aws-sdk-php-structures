<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestion;

trait GetIngestionTrait
{
    /**
     * @param GetIngestionRequest $args
     * @return GetIngestionResponse
     */
    public function getIngestion(GetIngestionRequest $args)
    {
        $result = parent::getIngestion($args->toArray());
        return new GetIngestionResponse($result->toArray());
    }
}
