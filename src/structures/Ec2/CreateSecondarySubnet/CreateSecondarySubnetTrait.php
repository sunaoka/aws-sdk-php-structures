<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecondarySubnet;

trait CreateSecondarySubnetTrait
{
    /**
     * @param CreateSecondarySubnetRequest $args
     * @return CreateSecondarySubnetResponse
     */
    public function createSecondarySubnet(CreateSecondarySubnetRequest $args)
    {
        $result = parent::createSecondarySubnet($args->toArray());
        return new CreateSecondarySubnetResponse($result->toArray());
    }
}
