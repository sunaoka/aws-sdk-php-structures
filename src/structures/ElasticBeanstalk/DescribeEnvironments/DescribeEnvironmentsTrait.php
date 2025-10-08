<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironments;

trait DescribeEnvironmentsTrait
{
    /**
     * @param DescribeEnvironmentsRequest $args
     * @return DescribeEnvironmentsResponse
     */
    public function describeEnvironments(DescribeEnvironmentsRequest $args)
    {
        $result = parent::describeEnvironments($args->toArray());
        return new DescribeEnvironmentsResponse($result->toArray());
    }
}
