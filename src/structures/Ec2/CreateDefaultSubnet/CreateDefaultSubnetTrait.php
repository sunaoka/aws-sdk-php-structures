<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet;

trait CreateDefaultSubnetTrait
{
    /**
     * @param CreateDefaultSubnetRequest $args
     * @return CreateDefaultSubnetResponse
     */
    public function createDefaultSubnet(CreateDefaultSubnetRequest $args)
    {
        $result = parent::createDefaultSubnet($args->toArray());
        return new CreateDefaultSubnetResponse($result->toArray());
    }
}
