<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSubnet;

trait DeleteSubnetTrait
{
    /**
     * @param DeleteSubnetRequest $args
     * @return void
     */
    public function deleteSubnet(DeleteSubnetRequest $args)
    {
        parent::deleteSubnet($args->toArray());
    }
}
