<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotInstances;

trait RequestSpotInstancesTrait
{
    /**
     * @param RequestSpotInstancesRequest $args
     * @return RequestSpotInstancesResponse
     */
    public function requestSpotInstances(RequestSpotInstancesRequest $args)
    {
        $result = parent::requestSpotInstances($args->toArray());
        return new RequestSpotInstancesResponse($result->toArray());
    }
}
