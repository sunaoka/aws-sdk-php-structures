<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateIpGroup;

trait CreateIpGroupTrait
{
    /**
     * @param CreateIpGroupRequest $args
     * @return CreateIpGroupResponse
     */
    public function createIpGroup(CreateIpGroupRequest $args)
    {
        $result = parent::createIpGroup($args->toArray());
        return new CreateIpGroupResponse($result->toArray());
    }
}
