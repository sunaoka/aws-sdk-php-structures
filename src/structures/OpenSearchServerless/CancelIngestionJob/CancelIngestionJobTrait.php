<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CancelIngestionJob;

trait CancelIngestionJobTrait
{
    /**
     * @param CancelIngestionJobRequest $args
     * @return CancelIngestionJobResponse
     */
    public function cancelIngestionJob(CancelIngestionJobRequest $args)
    {
        $result = parent::cancelIngestionJob($args->toArray());
        return new CancelIngestionJobResponse($result->toArray());
    }
}
