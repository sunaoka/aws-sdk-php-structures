<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeregisterInstance;

trait DeregisterInstanceTrait
{
    /**
     * @param DeregisterInstanceRequest $args
     * @return void
     */
    public function deregisterInstance(DeregisterInstanceRequest $args)
    {
        parent::deregisterInstance($args->toArray());
    }
}
