<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplications;

trait DescribeApplicationsTrait
{
    /**
     * @param DescribeApplicationsRequest $args
     * @return DescribeApplicationsResponse
     */
    public function describeApplications(DescribeApplicationsRequest $args)
    {
        $result = parent::describeApplications($args->toArray());
        return new DescribeApplicationsResponse($result->toArray());
    }
}
