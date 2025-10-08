<?php

namespace Sunaoka\Aws\Structures\AppFabric\CreateIngestion;

trait CreateIngestionTrait
{
    /**
     * @param CreateIngestionRequest $args
     * @return CreateIngestionResponse
     */
    public function createIngestion(CreateIngestionRequest $args)
    {
        $result = parent::createIngestion($args->toArray());
        return new CreateIngestionResponse($result->toArray());
    }
}
