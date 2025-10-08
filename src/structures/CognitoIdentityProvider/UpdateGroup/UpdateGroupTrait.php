<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateGroup;

trait UpdateGroupTrait
{
    /**
     * @param UpdateGroupRequest $args
     * @return UpdateGroupResponse
     */
    public function updateGroup(UpdateGroupRequest $args)
    {
        $result = parent::updateGroup($args->toArray());
        return new UpdateGroupResponse($result->toArray());
    }
}
