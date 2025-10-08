<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchUpdateMemberEc2DeepInspectionStatus;

trait BatchUpdateMemberEc2DeepInspectionStatusTrait
{
    /**
     * @param BatchUpdateMemberEc2DeepInspectionStatusRequest $args
     * @return BatchUpdateMemberEc2DeepInspectionStatusResponse
     */
    public function batchUpdateMemberEc2DeepInspectionStatus(BatchUpdateMemberEc2DeepInspectionStatusRequest $args)
    {
        $result = parent::batchUpdateMemberEc2DeepInspectionStatus($args->toArray());
        return new BatchUpdateMemberEc2DeepInspectionStatusResponse($result->toArray());
    }
}
