<?php

namespace Sunaoka\Aws\Structures\Glue\BatchStopJobRun;

trait BatchStopJobRunTrait
{
    /**
     * @param BatchStopJobRunRequest $args
     * @return BatchStopJobRunResponse
     */
    public function batchStopJobRun(BatchStopJobRunRequest $args)
    {
        $result = parent::batchStopJobRun($args->toArray());
        return new BatchStopJobRunResponse($result->toArray());
    }
}
