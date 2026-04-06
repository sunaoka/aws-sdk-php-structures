<?php

namespace Sunaoka\Aws\Structures\Odb\GetOdbNetwork;

trait GetOdbNetworkTrait
{
    /**
     * @param GetOdbNetworkRequest $args
     * @return GetOdbNetworkResponse
     */
    public function getOdbNetwork(GetOdbNetworkRequest $args)
    {
        $result = parent::getOdbNetwork($args->toArray());
        return new GetOdbNetworkResponse($result->toArray());
    }
}
