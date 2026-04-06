<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteInstance;

trait DeleteInstanceTrait
{
    /**
     * @param DeleteInstanceRequest $args
     * @return void
     */
    public function deleteInstance(DeleteInstanceRequest $args)
    {
        parent::deleteInstance($args->toArray());
    }
}
