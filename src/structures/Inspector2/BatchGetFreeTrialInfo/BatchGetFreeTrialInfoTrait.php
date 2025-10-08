<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFreeTrialInfo;

trait BatchGetFreeTrialInfoTrait
{
    /**
     * @param BatchGetFreeTrialInfoRequest $args
     * @return BatchGetFreeTrialInfoResponse
     */
    public function batchGetFreeTrialInfo(BatchGetFreeTrialInfoRequest $args)
    {
        $result = parent::batchGetFreeTrialInfo($args->toArray());
        return new BatchGetFreeTrialInfoResponse($result->toArray());
    }
}
