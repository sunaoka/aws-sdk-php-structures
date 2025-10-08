<?php

namespace Sunaoka\Aws\Structures\drs\DeleteRecoveryInstance;

trait DeleteRecoveryInstanceTrait
{
    /**
     * @param DeleteRecoveryInstanceRequest $args
     * @return void
     */
    public function deleteRecoveryInstance(DeleteRecoveryInstanceRequest $args)
    {
        parent::deleteRecoveryInstance($args->toArray());
    }
}
