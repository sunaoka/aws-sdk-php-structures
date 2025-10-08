<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTargetGroup;

trait ModifyTargetGroupTrait
{
    /**
     * @param ModifyTargetGroupRequest $args
     * @return ModifyTargetGroupResponse
     */
    public function modifyTargetGroup(ModifyTargetGroupRequest $args)
    {
        $result = parent::modifyTargetGroup($args->toArray());
        return new ModifyTargetGroupResponse($result->toArray());
    }
}
