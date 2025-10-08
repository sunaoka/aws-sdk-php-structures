<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetMemberEc2DeepInspectionStatus;

trait BatchGetMemberEc2DeepInspectionStatusTrait
{
    /**
     * @param BatchGetMemberEc2DeepInspectionStatusRequest $args
     * @return BatchGetMemberEc2DeepInspectionStatusResponse
     */
    public function batchGetMemberEc2DeepInspectionStatus(BatchGetMemberEc2DeepInspectionStatusRequest $args)
    {
        $result = parent::batchGetMemberEc2DeepInspectionStatus($args->toArray());
        return new BatchGetMemberEc2DeepInspectionStatusResponse($result->toArray());
    }
}
