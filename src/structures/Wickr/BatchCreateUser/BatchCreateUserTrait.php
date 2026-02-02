<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchCreateUser;

trait BatchCreateUserTrait
{
    /**
     * @param BatchCreateUserRequest $args
     * @return BatchCreateUserResponse
     */
    public function batchCreateUser(BatchCreateUserRequest $args)
    {
        $result = parent::batchCreateUser($args->toArray());
        return new BatchCreateUserResponse($result->toArray());
    }
}
