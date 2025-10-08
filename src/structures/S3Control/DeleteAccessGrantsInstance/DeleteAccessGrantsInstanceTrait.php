<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrantsInstance;

trait DeleteAccessGrantsInstanceTrait
{
    /**
     * @param DeleteAccessGrantsInstanceRequest $args
     * @return void
     */
    public function deleteAccessGrantsInstance(DeleteAccessGrantsInstanceRequest $args)
    {
        parent::deleteAccessGrantsInstance($args->toArray());
    }
}
