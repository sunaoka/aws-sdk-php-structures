<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstanceDetails;

trait DescribeApplicationInstanceDetailsTrait
{
    /**
     * @param DescribeApplicationInstanceDetailsRequest $args
     * @return DescribeApplicationInstanceDetailsResponse
     */
    public function describeApplicationInstanceDetails(DescribeApplicationInstanceDetailsRequest $args)
    {
        $result = parent::describeApplicationInstanceDetails($args->toArray());
        return new DescribeApplicationInstanceDetailsResponse($result->toArray());
    }
}
