<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests;

trait CancelSpotFleetRequestsTrait
{
    /**
     * @param CancelSpotFleetRequestsRequest $args
     * @return CancelSpotFleetRequestsResponse
     */
    public function cancelSpotFleetRequests(CancelSpotFleetRequestsRequest $args)
    {
        $result = parent::cancelSpotFleetRequests($args->toArray());
        return new CancelSpotFleetRequestsResponse($result->toArray());
    }
}
