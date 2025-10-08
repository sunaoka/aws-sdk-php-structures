<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeleteTargetGroup;

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
