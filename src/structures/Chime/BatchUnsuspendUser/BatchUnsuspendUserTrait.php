<?php

namespace Sunaoka\Aws\Structures\Chime\BatchUnsuspendUser;

trait BatchUnsuspendUserTrait
{
    /**
     * @param BatchUnsuspendUserRequest $args
     * @return BatchUnsuspendUserResponse
     */
    public function batchUnsuspendUser(BatchUnsuspendUserRequest $args)
    {
        $result = parent::batchUnsuspendUser($args->toArray());
        return new BatchUnsuspendUserResponse($result->toArray());
    }
}
