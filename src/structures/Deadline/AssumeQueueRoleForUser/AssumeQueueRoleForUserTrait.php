<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForUser;

trait AssumeQueueRoleForUserTrait
{
    /**
     * @param AssumeQueueRoleForUserRequest $args
     * @return AssumeQueueRoleForUserResponse
     */
    public function assumeQueueRoleForUser(AssumeQueueRoleForUserRequest $args)
    {
        $result = parent::assumeQueueRoleForUser($args->toArray());
        return new AssumeQueueRoleForUserResponse($result->toArray());
    }
}
