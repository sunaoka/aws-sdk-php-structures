<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UnassignInstance;

trait UnassignInstanceTrait
{
    /**
     * @param UnassignInstanceRequest $args
     * @return void
     */
    public function unassignInstance(UnassignInstanceRequest $args)
    {
        parent::unassignInstance($args->toArray());
    }
}
