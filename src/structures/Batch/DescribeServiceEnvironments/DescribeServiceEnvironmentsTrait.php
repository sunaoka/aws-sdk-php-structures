<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceEnvironments;

trait DescribeServiceEnvironmentsTrait
{
    /**
     * @param DescribeServiceEnvironmentsRequest $args
     * @return DescribeServiceEnvironmentsResponse
     */
    public function describeServiceEnvironments(DescribeServiceEnvironmentsRequest $args)
    {
        $result = parent::describeServiceEnvironments($args->toArray());
        return new DescribeServiceEnvironmentsResponse($result->toArray());
    }
}
