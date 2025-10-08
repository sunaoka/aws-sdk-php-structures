<?php

namespace Sunaoka\Aws\Structures\ivschat\DisconnectUser;

trait DisconnectUserTrait
{
    /**
     * @param DisconnectUserRequest $args
     * @return DisconnectUserResponse
     */
    public function disconnectUser(DisconnectUserRequest $args)
    {
        $result = parent::disconnectUser($args->toArray());
        return new DisconnectUserResponse($result->toArray());
    }
}
