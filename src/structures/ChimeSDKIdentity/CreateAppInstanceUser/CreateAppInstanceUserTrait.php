<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceUser;

trait CreateAppInstanceUserTrait
{
    /**
     * @param CreateAppInstanceUserRequest $args
     * @return CreateAppInstanceUserResponse
     */
    public function createAppInstanceUser(CreateAppInstanceUserRequest $args)
    {
        $result = parent::createAppInstanceUser($args->toArray());
        return new CreateAppInstanceUserResponse($result->toArray());
    }
}
