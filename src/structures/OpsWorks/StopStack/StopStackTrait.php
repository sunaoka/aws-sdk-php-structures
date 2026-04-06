<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StopStack;

trait StopStackTrait
{
    /**
     * @param StopStackRequest $args
     * @return void
     */
    public function stopStack(StopStackRequest $args)
    {
        parent::stopStack($args->toArray());
    }
}
