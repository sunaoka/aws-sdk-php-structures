<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CancelJobRun;

trait CancelJobRunTrait
{
    /**
     * @param CancelJobRunRequest $args
     * @return CancelJobRunResponse
     */
    public function cancelJobRun(CancelJobRunRequest $args)
    {
        $result = parent::cancelJobRun($args->toArray());
        return new CancelJobRunResponse($result->toArray());
    }
}
