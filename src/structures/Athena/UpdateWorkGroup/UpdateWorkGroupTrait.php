<?php

namespace Sunaoka\Aws\Structures\Athena\UpdateWorkGroup;

trait UpdateWorkGroupTrait
{
    /**
     * @param UpdateWorkGroupRequest $args
     * @return UpdateWorkGroupResponse
     */
    public function updateWorkGroup(UpdateWorkGroupRequest $args)
    {
        $result = parent::updateWorkGroup($args->toArray());
        return new UpdateWorkGroupResponse($result->toArray());
    }
}
