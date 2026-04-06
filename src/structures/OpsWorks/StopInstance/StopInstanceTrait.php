<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StopInstance;

trait StopInstanceTrait
{
    /**
     * @param StopInstanceRequest $args
     * @return void
     */
    public function stopInstance(StopInstanceRequest $args)
    {
        parent::stopInstance($args->toArray());
    }
}
