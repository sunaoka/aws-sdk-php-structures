<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationTopology;

trait DescribeCapacityReservationTopologyTrait
{
    /**
     * @param DescribeCapacityReservationTopologyRequest $args
     * @return DescribeCapacityReservationTopologyResponse
     */
    public function describeCapacityReservationTopology(DescribeCapacityReservationTopologyRequest $args)
    {
        $result = parent::describeCapacityReservationTopology($args->toArray());
        return new DescribeCapacityReservationTopologyResponse($result->toArray());
    }
}
