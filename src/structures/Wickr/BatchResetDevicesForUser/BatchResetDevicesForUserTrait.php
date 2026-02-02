<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchResetDevicesForUser;

trait BatchResetDevicesForUserTrait
{
    /**
     * @param BatchResetDevicesForUserRequest $args
     * @return BatchResetDevicesForUserResponse
     */
    public function batchResetDevicesForUser(BatchResetDevicesForUserRequest $args)
    {
        $result = parent::batchResetDevicesForUser($args->toArray());
        return new BatchResetDevicesForUserResponse($result->toArray());
    }
}
