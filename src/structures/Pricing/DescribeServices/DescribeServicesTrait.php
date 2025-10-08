<?php

namespace Sunaoka\Aws\Structures\Pricing\DescribeServices;

trait DescribeServicesTrait
{
    /**
     * @param DescribeServicesRequest $args
     * @return DescribeServicesResponse
     */
    public function describeServices(DescribeServicesRequest $args)
    {
        $result = parent::describeServices($args->toArray());
        return new DescribeServicesResponse($result->toArray());
    }
}
