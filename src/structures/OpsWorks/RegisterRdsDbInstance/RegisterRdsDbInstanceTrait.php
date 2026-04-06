<?php

namespace Sunaoka\Aws\Structures\OpsWorks\RegisterRdsDbInstance;

trait RegisterRdsDbInstanceTrait
{
    /**
     * @param RegisterRdsDbInstanceRequest $args
     * @return void
     */
    public function registerRdsDbInstance(RegisterRdsDbInstanceRequest $args)
    {
        parent::registerRdsDbInstance($args->toArray());
    }
}
