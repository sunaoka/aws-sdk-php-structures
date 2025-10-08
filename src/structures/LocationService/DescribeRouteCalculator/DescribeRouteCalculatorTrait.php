<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeRouteCalculator;

trait DescribeRouteCalculatorTrait
{
    /**
     * @param DescribeRouteCalculatorRequest $args
     * @return DescribeRouteCalculatorResponse
     */
    public function describeRouteCalculator(DescribeRouteCalculatorRequest $args)
    {
        $result = parent::describeRouteCalculator($args->toArray());
        return new DescribeRouteCalculatorResponse($result->toArray());
    }
}
