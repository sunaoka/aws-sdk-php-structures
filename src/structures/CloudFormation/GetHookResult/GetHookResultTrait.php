<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetHookResult;

trait GetHookResultTrait
{
    /**
     * @param GetHookResultRequest $args
     * @return GetHookResultResponse
     */
    public function getHookResult(GetHookResultRequest $args)
    {
        $result = parent::getHookResult($args->toArray());
        return new GetHookResultResponse($result->toArray());
    }
}
