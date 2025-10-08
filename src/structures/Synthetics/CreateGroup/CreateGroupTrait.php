<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateGroup;

trait CreateGroupTrait
{
    /**
     * @param CreateGroupRequest $args
     * @return CreateGroupResponse
     */
    public function createGroup(CreateGroupRequest $args)
    {
        $result = parent::createGroup($args->toArray());
        return new CreateGroupResponse($result->toArray());
    }
}
