<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActions;

trait DescribeEnvironmentManagedActionsTrait
{
    /**
     * @param DescribeEnvironmentManagedActionsRequest $args
     * @return DescribeEnvironmentManagedActionsResponse
     */
    public function describeEnvironmentManagedActions(DescribeEnvironmentManagedActionsRequest $args)
    {
        $result = parent::describeEnvironmentManagedActions($args->toArray());
        return new DescribeEnvironmentManagedActionsResponse($result->toArray());
    }
}
