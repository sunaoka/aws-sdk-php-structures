<?php

namespace Sunaoka\Aws\Structures\Glue\CancelMLTaskRun;

trait CancelMLTaskRunTrait
{
    /**
     * @param CancelMLTaskRunRequest $args
     * @return CancelMLTaskRunResponse
     */
    public function cancelMLTaskRun(CancelMLTaskRunRequest $args)
    {
        $result = parent::cancelMLTaskRun($args->toArray());
        return new CancelMLTaskRunResponse($result->toArray());
    }
}
