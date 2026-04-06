<?php

namespace Sunaoka\Aws\Structures\OpsWorks\StartStack;

trait StartStackTrait
{
    /**
     * @param StartStackRequest $args
     * @return void
     */
    public function startStack(StartStackRequest $args)
    {
        parent::startStack($args->toArray());
    }
}
