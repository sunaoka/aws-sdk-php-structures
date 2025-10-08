<?php

namespace Sunaoka\Aws\Structures\MigrationHub\DescribeApplicationState;

trait DescribeApplicationStateTrait
{
    /**
     * @param DescribeApplicationStateRequest $args
     * @return DescribeApplicationStateResponse
     */
    public function describeApplicationState(DescribeApplicationStateRequest $args)
    {
        $result = parent::describeApplicationState($args->toArray());
        return new DescribeApplicationStateResponse($result->toArray());
    }
}
