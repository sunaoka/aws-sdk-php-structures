<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteStack;

trait DeleteStackTrait
{
    /**
     * @param DeleteStackRequest $args
     * @return void
     */
    public function deleteStack(DeleteStackRequest $args)
    {
        parent::deleteStack($args->toArray());
    }
}
