<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetIngestionJob;

trait GetIngestionJobTrait
{
    /**
     * @param GetIngestionJobRequest $args
     * @return GetIngestionJobResponse
     */
    public function getIngestionJob(GetIngestionJobRequest $args)
    {
        $result = parent::getIngestionJob($args->toArray());
        return new GetIngestionJobResponse($result->toArray());
    }
}
