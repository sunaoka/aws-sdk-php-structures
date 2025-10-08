<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartRemediationExecution;

trait StartRemediationExecutionTrait
{
    /**
     * @param StartRemediationExecutionRequest $args
     * @return StartRemediationExecutionResponse
     */
    public function startRemediationExecution(StartRemediationExecutionRequest $args)
    {
        $result = parent::startRemediationExecution($args->toArray());
        return new StartRemediationExecutionResponse($result->toArray());
    }
}
