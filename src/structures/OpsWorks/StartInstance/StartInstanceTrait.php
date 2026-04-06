<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StartInstance;

trait StartInstanceTrait
{
    /**
     * @param StartInstanceRequest $args
     * @return void
     */
    public function startInstance(StartInstanceRequest $args)
    {
        parent::startInstance($args->toArray());
    }
}
