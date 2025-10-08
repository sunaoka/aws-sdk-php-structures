<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteInstance;

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
