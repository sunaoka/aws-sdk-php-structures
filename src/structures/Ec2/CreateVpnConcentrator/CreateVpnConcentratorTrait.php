<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConcentrator;

trait CreateVpnConcentratorTrait
{
    /**
     * @param CreateVpnConcentratorRequest $args
     * @return CreateVpnConcentratorResponse
     */
    public function createVpnConcentrator(CreateVpnConcentratorRequest $args)
    {
        $result = parent::createVpnConcentrator($args->toArray());
        return new CreateVpnConcentratorResponse($result->toArray());
    }
}
