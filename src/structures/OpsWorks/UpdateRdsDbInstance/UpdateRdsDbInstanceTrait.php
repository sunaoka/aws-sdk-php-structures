<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateRdsDbInstance;

trait UpdateRdsDbInstanceTrait
{
    /**
     * @param UpdateRdsDbInstanceRequest $args
     * @return void
     */
    public function updateRdsDbInstance(UpdateRdsDbInstanceRequest $args)
    {
        parent::updateRdsDbInstance($args->toArray());
    }
}
