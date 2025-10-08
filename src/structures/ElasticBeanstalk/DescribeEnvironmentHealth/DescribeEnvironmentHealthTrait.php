<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentHealth;

trait DescribeEnvironmentHealthTrait
{
    /**
     * @param DescribeEnvironmentHealthRequest $args
     * @return DescribeEnvironmentHealthResponse
     */
    public function describeEnvironmentHealth(DescribeEnvironmentHealthRequest $args)
    {
        $result = parent::describeEnvironmentHealth($args->toArray());
        return new DescribeEnvironmentHealthResponse($result->toArray());
    }
}
