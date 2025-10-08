<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpc;

trait DeleteVpcTrait
{
    /**
     * @param DeleteVpcRequest $args
     * @return void
     */
    public function deleteVpc(DeleteVpcRequest $args)
    {
        parent::deleteVpc($args->toArray());
    }
}
