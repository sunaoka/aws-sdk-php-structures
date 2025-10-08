<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRun;

trait GetJobRunTrait
{
    /**
     * @param GetJobRunRequest $args
     * @return GetJobRunResponse
     */
    public function getJobRun(GetJobRunRequest $args)
    {
        $result = parent::getJobRun($args->toArray());
        return new GetJobRunResponse($result->toArray());
    }
}
