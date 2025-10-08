<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetTargetGroup;

trait GetTargetGroupTrait
{
    /**
     * @param GetTargetGroupRequest $args
     * @return GetTargetGroupResponse
     */
    public function getTargetGroup(GetTargetGroupRequest $args)
    {
        $result = parent::getTargetGroup($args->toArray());
        return new GetTargetGroupResponse($result->toArray());
    }
}
