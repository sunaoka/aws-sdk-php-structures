<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets;

trait DescribeFleetsTrait
{
    /**
     * @param DescribeFleetsRequest $args
     * @return DescribeFleetsResponse
     */
    public function describeFleets(DescribeFleetsRequest $args)
    {
        $result = parent::describeFleets($args->toArray());
        return new DescribeFleetsResponse($result->toArray());
    }
}
