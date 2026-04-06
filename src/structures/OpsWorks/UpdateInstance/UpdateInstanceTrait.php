<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateInstance;

trait UpdateInstanceTrait
{
    /**
     * @param UpdateInstanceRequest $args
     * @return void
     */
    public function updateInstance(UpdateInstanceRequest $args)
    {
        parent::updateInstance($args->toArray());
    }
}
