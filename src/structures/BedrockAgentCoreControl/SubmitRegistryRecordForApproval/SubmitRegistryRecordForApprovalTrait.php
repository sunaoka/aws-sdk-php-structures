<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SubmitRegistryRecordForApproval;

trait SubmitRegistryRecordForApprovalTrait
{
    /**
     * @param SubmitRegistryRecordForApprovalRequest $args
     * @return SubmitRegistryRecordForApprovalResponse
     */
    public function submitRegistryRecordForApproval(SubmitRegistryRecordForApprovalRequest $args)
    {
        $result = parent::submitRegistryRecordForApproval($args->toArray());
        return new SubmitRegistryRecordForApprovalResponse($result->toArray());
    }
}
