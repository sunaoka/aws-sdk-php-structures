<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotInstanceRequests;

trait CancelSpotInstanceRequestsTrait
{
    /**
     * @param CancelSpotInstanceRequestsRequest $args
     * @return CancelSpotInstanceRequestsResponse
     */
    public function cancelSpotInstanceRequests(CancelSpotInstanceRequestsRequest $args)
    {
        $result = parent::cancelSpotInstanceRequests($args->toArray());
        return new CancelSpotInstanceRequestsResponse($result->toArray());
    }
}
