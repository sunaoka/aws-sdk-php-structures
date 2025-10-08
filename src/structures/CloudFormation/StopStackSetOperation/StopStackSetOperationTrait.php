<?php

namespace Sunaoka\Aws\Structures\CloudFormation\StopStackSetOperation;

trait StopStackSetOperationTrait
{
    /**
     * @param StopStackSetOperationRequest $args
     * @return StopStackSetOperationResponse
     */
    public function stopStackSetOperation(StopStackSetOperationRequest $args)
    {
        $result = parent::stopStackSetOperation($args->toArray());
        return new StopStackSetOperationResponse($result->toArray());
    }
}
