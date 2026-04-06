<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup;

trait UpdateComputeNodeGroupTrait
{
    /**
     * @param UpdateComputeNodeGroupRequest $args
     * @return UpdateComputeNodeGroupResponse
     */
    public function updateComputeNodeGroup(UpdateComputeNodeGroupRequest $args)
    {
        $result = parent::updateComputeNodeGroup($args->toArray());
        return new UpdateComputeNodeGroupResponse($result->toArray());
    }
}
