<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateTargetGroup;

trait CreateTargetGroupTrait
{
    /**
     * @param CreateTargetGroupRequest $args
     * @return CreateTargetGroupResponse
     */
    public function createTargetGroup(CreateTargetGroupRequest $args)
    {
        $result = parent::createTargetGroup($args->toArray());
        return new CreateTargetGroupResponse($result->toArray());
    }
}
