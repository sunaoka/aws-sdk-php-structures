<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListDeployActionExecutionTargets;

trait ListDeployActionExecutionTargetsTrait
{
    /**
     * @param ListDeployActionExecutionTargetsRequest $args
     * @return ListDeployActionExecutionTargetsResponse
     */
    public function listDeployActionExecutionTargets(ListDeployActionExecutionTargetsRequest $args)
    {
        $result = parent::listDeployActionExecutionTargets($args->toArray());
        return new ListDeployActionExecutionTargetsResponse($result->toArray());
    }
}
