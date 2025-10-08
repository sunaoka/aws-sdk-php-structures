<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRun;

trait GetMLTaskRunTrait
{
    /**
     * @param GetMLTaskRunRequest $args
     * @return GetMLTaskRunResponse
     */
    public function getMLTaskRun(GetMLTaskRunRequest $args)
    {
        $result = parent::getMLTaskRun($args->toArray());
        return new GetMLTaskRunResponse($result->toArray());
    }
}
