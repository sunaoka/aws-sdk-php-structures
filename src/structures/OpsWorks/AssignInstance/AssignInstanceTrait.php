<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AssignInstance;

trait AssignInstanceTrait
{
    /**
     * @param AssignInstanceRequest $args
     * @return void
     */
    public function assignInstance(AssignInstanceRequest $args)
    {
        parent::assignInstance($args->toArray());
    }
}
