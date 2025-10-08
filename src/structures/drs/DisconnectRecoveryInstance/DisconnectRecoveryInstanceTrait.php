<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectRecoveryInstance;

trait DisconnectRecoveryInstanceTrait
{
    /**
     * @param DisconnectRecoveryInstanceRequest $args
     * @return void
     */
    public function disconnectRecoveryInstance(DisconnectRecoveryInstanceRequest $args)
    {
        parent::disconnectRecoveryInstance($args->toArray());
    }
}
