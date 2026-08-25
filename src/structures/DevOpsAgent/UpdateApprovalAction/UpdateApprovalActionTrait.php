<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateApprovalAction;

trait UpdateApprovalActionTrait
{
    /**
     * @param UpdateApprovalActionRequest $args
     * @return UpdateApprovalActionResponse
     */
    public function updateApprovalAction(UpdateApprovalActionRequest $args)
    {
        $result = parent::updateApprovalAction($args->toArray());
        return new UpdateApprovalActionResponse($result->toArray());
    }
}
