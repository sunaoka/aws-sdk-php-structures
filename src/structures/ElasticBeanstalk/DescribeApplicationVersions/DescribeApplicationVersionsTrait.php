<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeApplicationVersions;

trait DescribeApplicationVersionsTrait
{
    /**
     * @param DescribeApplicationVersionsRequest $args
     * @return DescribeApplicationVersionsResponse
     */
    public function describeApplicationVersions(DescribeApplicationVersionsRequest $args)
    {
        $result = parent::describeApplicationVersions($args->toArray());
        return new DescribeApplicationVersionsResponse($result->toArray());
    }
}
