<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus;

trait GetServiceLinkedRoleDeletionStatusTrait
{
    /**
     * @param GetServiceLinkedRoleDeletionStatusRequest $args
     * @return GetServiceLinkedRoleDeletionStatusResponse
     */
    public function getServiceLinkedRoleDeletionStatus(GetServiceLinkedRoleDeletionStatusRequest $args)
    {
        $result = parent::getServiceLinkedRoleDeletionStatus($args->toArray());
        return new GetServiceLinkedRoleDeletionStatusResponse($result->toArray());
    }
}
