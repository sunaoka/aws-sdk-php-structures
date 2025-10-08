<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteTargetGroup;

trait DeleteTargetGroupTrait
{
    /**
     * @param DeleteTargetGroupRequest $args
     * @return DeleteTargetGroupResponse
     */
    public function deleteTargetGroup(DeleteTargetGroupRequest $args)
    {
        $result = parent::deleteTargetGroup($args->toArray());
        return new DeleteTargetGroupResponse($result->toArray());
    }
}
