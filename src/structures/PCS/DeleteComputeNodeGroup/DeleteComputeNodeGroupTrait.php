<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteComputeNodeGroup;

trait DeleteComputeNodeGroupTrait
{
    /**
     * @param DeleteComputeNodeGroupRequest $args
     * @return DeleteComputeNodeGroupResponse
     */
    public function deleteComputeNodeGroup(DeleteComputeNodeGroupRequest $args)
    {
        $result = parent::deleteComputeNodeGroup($args->toArray());
        return new DeleteComputeNodeGroupResponse($result->toArray());
    }
}
