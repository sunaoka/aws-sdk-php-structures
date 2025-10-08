<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteReadinessCheck;

trait DeleteReadinessCheckTrait
{
    /**
     * @param DeleteReadinessCheckRequest $args
     * @return void
     */
    public function deleteReadinessCheck(DeleteReadinessCheckRequest $args)
    {
        parent::deleteReadinessCheck($args->toArray());
    }
}
