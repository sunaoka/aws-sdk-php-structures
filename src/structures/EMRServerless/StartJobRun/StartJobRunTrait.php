<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun;

trait StartJobRunTrait
{
    /**
     * @param StartJobRunRequest $args
     * @return StartJobRunResponse
     */
    public function startJobRun(StartJobRunRequest $args)
    {
        $result = parent::startJobRun($args->toArray());
        return new StartJobRunResponse($result->toArray());
    }
}
