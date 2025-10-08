<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnet;

trait CreateSubnetTrait
{
    /**
     * @param CreateSubnetRequest $args
     * @return CreateSubnetResponse
     */
    public function createSubnet(CreateSubnetRequest $args)
    {
        $result = parent::createSubnet($args->toArray());
        return new CreateSubnetResponse($result->toArray());
    }
}
