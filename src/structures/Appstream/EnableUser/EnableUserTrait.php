<?php

namespace Sunaoka\Aws\Structures\Appstream\EnableUser;

trait EnableUserTrait
{
    /**
     * @param EnableUserRequest $args
     * @return EnableUserResponse
     */
    public function enableUser(EnableUserRequest $args)
    {
        $result = parent::enableUser($args->toArray());
        return new EnableUserResponse($result->toArray());
    }
}
