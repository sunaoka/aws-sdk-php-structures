<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecondarySubnet;

trait DeleteSecondarySubnetTrait
{
    /**
     * @param DeleteSecondarySubnetRequest $args
     * @return DeleteSecondarySubnetResponse
     */
    public function deleteSecondarySubnet(DeleteSecondarySubnetRequest $args)
    {
        $result = parent::deleteSecondarySubnet($args->toArray());
        return new DeleteSecondarySubnetResponse($result->toArray());
    }
}
