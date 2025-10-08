<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUpdateUser;

trait BatchUpdateUserTrait
{
    /**
     * @param BatchUpdateUserRequest $args
     * @return BatchUpdateUserResponse
     */
    public function batchUpdateUser(BatchUpdateUserRequest $args)
    {
        $result = parent::batchUpdateUser($args->toArray());
        return new BatchUpdateUserResponse($result->toArray());
    }
}
