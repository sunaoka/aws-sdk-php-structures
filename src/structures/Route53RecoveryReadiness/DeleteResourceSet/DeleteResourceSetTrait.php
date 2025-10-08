<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\DeleteResourceSet;

trait DeleteResourceSetTrait
{
    /**
     * @param DeleteResourceSetRequest $args
     * @return void
     */
    public function deleteResourceSet(DeleteResourceSetRequest $args)
    {
        parent::deleteResourceSet($args->toArray());
    }
}
