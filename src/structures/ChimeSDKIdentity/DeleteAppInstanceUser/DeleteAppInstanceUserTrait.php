<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstanceUser;

trait DeleteAppInstanceUserTrait
{
    /**
     * @param DeleteAppInstanceUserRequest $args
     * @return void
     */
    public function deleteAppInstanceUser(DeleteAppInstanceUserRequest $args)
    {
        parent::deleteAppInstanceUser($args->toArray());
    }
}
