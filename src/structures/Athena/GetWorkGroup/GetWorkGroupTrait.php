<?php

namespace Sunaoka\Aws\Structures\Athena\GetWorkGroup;

trait GetWorkGroupTrait
{
    /**
     * @param GetWorkGroupRequest $args
     * @return GetWorkGroupResponse
     */
    public function getWorkGroup(GetWorkGroupRequest $args)
    {
        $result = parent::getWorkGroup($args->toArray());
        return new GetWorkGroupResponse($result->toArray());
    }
}
