<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications;

trait DescribeRedshiftIdcApplicationsTrait
{
    /**
     * @param DescribeRedshiftIdcApplicationsRequest $args
     * @return DescribeRedshiftIdcApplicationsResponse
     */
    public function describeRedshiftIdcApplications(DescribeRedshiftIdcApplicationsRequest $args)
    {
        $result = parent::describeRedshiftIdcApplications($args->toArray());
        return new DescribeRedshiftIdcApplicationsResponse($result->toArray());
    }
}
