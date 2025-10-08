<?php

namespace Sunaoka\Aws\Structures\Chime\BatchSuspendUser;

trait BatchSuspendUserTrait
{
    /**
     * @param BatchSuspendUserRequest $args
     * @return BatchSuspendUserResponse
     */
    public function batchSuspendUser(BatchSuspendUserRequest $args)
    {
        $result = parent::batchSuspendUser($args->toArray());
        return new BatchSuspendUserResponse($result->toArray());
    }
}
