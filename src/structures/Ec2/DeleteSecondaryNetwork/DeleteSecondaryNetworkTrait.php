<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecondaryNetwork;

trait DeleteSecondaryNetworkTrait
{
    /**
     * @param DeleteSecondaryNetworkRequest $args
     * @return DeleteSecondaryNetworkResponse
     */
    public function deleteSecondaryNetwork(DeleteSecondaryNetworkRequest $args)
    {
        $result = parent::deleteSecondaryNetwork($args->toArray());
        return new DeleteSecondaryNetworkResponse($result->toArray());
    }
}
