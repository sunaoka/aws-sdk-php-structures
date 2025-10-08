<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DeleteAppInstance;

trait DeleteAppInstanceTrait
{
    /**
     * @param DeleteAppInstanceRequest $args
     * @return void
     */
    public function deleteAppInstance(DeleteAppInstanceRequest $args)
    {
        parent::deleteAppInstance($args->toArray());
    }
}
