<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup;

trait CreateWorkGroupTrait
{
    /**
     * @param CreateWorkGroupRequest $args
     * @return CreateWorkGroupResponse
     */
    public function createWorkGroup(CreateWorkGroupRequest $args)
    {
        $result = parent::createWorkGroup($args->toArray());
        return new CreateWorkGroupResponse($result->toArray());
    }
}
