<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterRdsDbInstance;

trait DeregisterRdsDbInstanceTrait
{
    /**
     * @param DeregisterRdsDbInstanceRequest $args
     * @return void
     */
    public function deregisterRdsDbInstance(DeregisterRdsDbInstanceRequest $args)
    {
        parent::deregisterRdsDbInstance($args->toArray());
    }
}
