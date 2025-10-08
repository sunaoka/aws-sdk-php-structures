<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachInstances;

trait AttachInstancesTrait
{
    /**
     * @param AttachInstancesRequest $args
     * @return void
     */
    public function attachInstances(AttachInstancesRequest $args)
    {
        parent::attachInstances($args->toArray());
    }
}
