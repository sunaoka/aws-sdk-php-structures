<?php

namespace Sunaoka\Aws\Structures\Wickr\ListDevicesForUser;

trait ListDevicesForUserTrait
{
    /**
     * @param ListDevicesForUserRequest $args
     * @return ListDevicesForUserResponse
     */
    public function listDevicesForUser(ListDevicesForUserRequest $args)
    {
        $result = parent::listDevicesForUser($args->toArray());
        return new ListDevicesForUserResponse($result->toArray());
    }
}
