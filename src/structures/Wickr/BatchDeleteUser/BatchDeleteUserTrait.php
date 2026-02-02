<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchDeleteUser;

trait BatchDeleteUserTrait
{
    /**
     * @param BatchDeleteUserRequest $args
     * @return BatchDeleteUserResponse
     */
    public function batchDeleteUser(BatchDeleteUserRequest $args)
    {
        $result = parent::batchDeleteUser($args->toArray());
        return new BatchDeleteUserResponse($result->toArray());
    }
}
