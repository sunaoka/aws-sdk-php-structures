<?php

namespace Sunaoka\Aws\Structures\Ssm\GetCommandInvocation;

trait GetCommandInvocationTrait
{
    /**
     * @param GetCommandInvocationRequest $args
     * @return GetCommandInvocationResponse
     */
    public function getCommandInvocation(GetCommandInvocationRequest $args)
    {
        $result = parent::getCommandInvocation($args->toArray());
        return new GetCommandInvocationResponse($result->toArray());
    }
}
