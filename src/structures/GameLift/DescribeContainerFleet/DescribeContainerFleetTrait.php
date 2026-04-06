<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerFleet;

trait DescribeContainerFleetTrait
{
    /**
     * @param DescribeContainerFleetRequest $args
     * @return DescribeContainerFleetResponse
     */
    public function describeContainerFleet(DescribeContainerFleetRequest $args)
    {
        $result = parent::describeContainerFleet($args->toArray());
        return new DescribeContainerFleetResponse($result->toArray());
    }
}
