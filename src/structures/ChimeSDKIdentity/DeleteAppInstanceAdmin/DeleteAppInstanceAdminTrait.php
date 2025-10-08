<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstanceAdmin;

trait DeleteAppInstanceAdminTrait
{
    /**
     * @param DeleteAppInstanceAdminRequest $args
     * @return void
     */
    public function deleteAppInstanceAdmin(DeleteAppInstanceAdminRequest $args)
    {
        parent::deleteAppInstanceAdmin($args->toArray());
    }
}
