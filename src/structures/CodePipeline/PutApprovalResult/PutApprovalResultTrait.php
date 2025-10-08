<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutApprovalResult;

trait PutApprovalResultTrait
{
    /**
     * @param PutApprovalResultRequest $args
     * @return PutApprovalResultResponse
     */
    public function putApprovalResult(PutApprovalResultRequest $args)
    {
        $result = parent::putApprovalResult($args->toArray());
        return new PutApprovalResultResponse($result->toArray());
    }
}
