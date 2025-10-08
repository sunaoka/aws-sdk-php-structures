<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeConversionTasks;

trait DescribeConversionTasksTrait
{
    /**
     * @param DescribeConversionTasksRequest $args
     * @return DescribeConversionTasksResponse
     */
    public function describeConversionTasks(DescribeConversionTasksRequest $args)
    {
        $result = parent::describeConversionTasks($args->toArray());
        return new DescribeConversionTasksResponse($result->toArray());
    }
}
