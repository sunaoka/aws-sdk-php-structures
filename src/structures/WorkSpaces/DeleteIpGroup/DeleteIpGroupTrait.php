<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteIpGroup;

trait DeleteIpGroupTrait
{
    /**
     * @param DeleteIpGroupRequest $args
     * @return DeleteIpGroupResponse
     */
    public function deleteIpGroup(DeleteIpGroupRequest $args)
    {
        $result = parent::deleteIpGroup($args->toArray());
        return new DeleteIpGroupResponse($result->toArray());
    }
}
