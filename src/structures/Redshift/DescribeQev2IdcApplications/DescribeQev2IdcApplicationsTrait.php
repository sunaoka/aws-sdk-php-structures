<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeQev2IdcApplications;

trait DescribeQev2IdcApplicationsTrait
{
    /**
     * @param DescribeQev2IdcApplicationsRequest $args
     * @return DescribeQev2IdcApplicationsResponse
     */
    public function describeQev2IdcApplications(DescribeQev2IdcApplicationsRequest $args)
    {
        $result = parent::describeQev2IdcApplications($args->toArray());
        return new DescribeQev2IdcApplicationsResponse($result->toArray());
    }
}
