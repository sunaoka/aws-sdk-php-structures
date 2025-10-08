<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteIngestion;

trait DeleteIngestionTrait
{
    /**
     * @param DeleteIngestionRequest $args
     * @return DeleteIngestionResponse
     */
    public function deleteIngestion(DeleteIngestionRequest $args)
    {
        $result = parent::deleteIngestion($args->toArray());
        return new DeleteIngestionResponse($result->toArray());
    }
}
