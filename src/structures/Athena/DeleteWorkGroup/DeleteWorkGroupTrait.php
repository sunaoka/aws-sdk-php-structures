<?php

namespace Sunaoka\Aws\Structures\Athena\DeleteWorkGroup;

trait DeleteWorkGroupTrait
{
    /**
     * @param DeleteWorkGroupRequest $args
     * @return DeleteWorkGroupResponse
     */
    public function deleteWorkGroup(DeleteWorkGroupRequest $args)
    {
        $result = parent::deleteWorkGroup($args->toArray());
        return new DeleteWorkGroupResponse($result->toArray());
    }
}
