<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateTargetGroup;

trait UpdateTargetGroupTrait
{
    /**
     * @param UpdateTargetGroupRequest $args
     * @return UpdateTargetGroupResponse
     */
    public function updateTargetGroup(UpdateTargetGroupRequest $args)
    {
        $result = parent::updateTargetGroup($args->toArray());
        return new UpdateTargetGroupResponse($result->toArray());
    }
}
