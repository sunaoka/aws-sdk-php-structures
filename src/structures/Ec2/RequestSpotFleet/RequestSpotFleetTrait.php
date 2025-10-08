<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet;

trait RequestSpotFleetTrait
{
    /**
     * @param RequestSpotFleetRequest $args
     * @return RequestSpotFleetResponse
     */
    public function requestSpotFleet(RequestSpotFleetRequest $args)
    {
        $result = parent::requestSpotFleet($args->toArray());
        return new RequestSpotFleetResponse($result->toArray());
    }
}
