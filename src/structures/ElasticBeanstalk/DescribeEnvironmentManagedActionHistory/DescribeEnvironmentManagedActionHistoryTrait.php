<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeEnvironmentManagedActionHistory;

trait DescribeEnvironmentManagedActionHistoryTrait
{
    /**
     * @param DescribeEnvironmentManagedActionHistoryRequest $args
     * @return DescribeEnvironmentManagedActionHistoryResponse
     */
    public function describeEnvironmentManagedActionHistory(DescribeEnvironmentManagedActionHistoryRequest $args)
    {
        $result = parent::describeEnvironmentManagedActionHistory($args->toArray());
        return new DescribeEnvironmentManagedActionHistoryResponse($result->toArray());
    }
}
