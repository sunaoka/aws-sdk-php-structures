<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecondaryNetwork;

trait CreateSecondaryNetworkTrait
{
    /**
     * @param CreateSecondaryNetworkRequest $args
     * @return CreateSecondaryNetworkResponse
     */
    public function createSecondaryNetwork(CreateSecondaryNetworkRequest $args)
    {
        $result = parent::createSecondaryNetwork($args->toArray());
        return new CreateSecondaryNetworkResponse($result->toArray());
    }
}
