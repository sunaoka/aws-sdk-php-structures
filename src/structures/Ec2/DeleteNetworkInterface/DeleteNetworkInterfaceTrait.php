<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterface;

trait DeleteNetworkInterfaceTrait
{
    /**
     * @param DeleteNetworkInterfaceRequest $args
     * @return void
     */
    public function deleteNetworkInterface(DeleteNetworkInterfaceRequest $args)
    {
        parent::deleteNetworkInterface($args->toArray());
    }
}
