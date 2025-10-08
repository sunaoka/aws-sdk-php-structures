<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachNetworkInterface;

trait DetachNetworkInterfaceTrait
{
    /**
     * @param DetachNetworkInterfaceRequest $args
     * @return void
     */
    public function detachNetworkInterface(DetachNetworkInterfaceRequest $args)
    {
        parent::detachNetworkInterface($args->toArray());
    }
}
