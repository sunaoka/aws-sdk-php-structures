<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateStack;

trait UpdateStackTrait
{
    /**
     * @param UpdateStackRequest $args
     * @return void
     */
    public function updateStack(UpdateStackRequest $args)
    {
        parent::updateStack($args->toArray());
    }
}
