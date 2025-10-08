<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup;

trait CreateComputeNodeGroupTrait
{
    /**
     * @param CreateComputeNodeGroupRequest $args
     * @return CreateComputeNodeGroupResponse
     */
    public function createComputeNodeGroup(CreateComputeNodeGroupRequest $args)
    {
        $result = parent::createComputeNodeGroup($args->toArray());
        return new CreateComputeNodeGroupResponse($result->toArray());
    }
}
