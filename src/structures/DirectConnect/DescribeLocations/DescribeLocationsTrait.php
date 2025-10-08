<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLocations;

trait DescribeLocationsTrait
{
    /**
     * @return DescribeLocationsResponse
     */
    public function describeLocations()
    {
        $result = parent::describeLocations();
        return new DescribeLocationsResponse($result->toArray());
    }
}
