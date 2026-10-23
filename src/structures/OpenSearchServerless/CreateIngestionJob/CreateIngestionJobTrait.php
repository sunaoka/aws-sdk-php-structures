<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateIngestionJob;

trait CreateIngestionJobTrait
{
    /**
     * @param CreateIngestionJobRequest $args
     * @return CreateIngestionJobResponse
     */
    public function createIngestionJob(CreateIngestionJobRequest $args)
    {
        $result = parent::createIngestionJob($args->toArray());
        return new CreateIngestionJobResponse($result->toArray());
    }
}
