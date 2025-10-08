<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup;

trait GetComputeNodeGroupTrait
{
    /**
     * @param GetComputeNodeGroupRequest $args
     * @return GetComputeNodeGroupResponse
     */
    public function getComputeNodeGroup(GetComputeNodeGroupRequest $args)
    {
        $result = parent::getComputeNodeGroup($args->toArray());
        return new GetComputeNodeGroupResponse($result->toArray());
    }
}
