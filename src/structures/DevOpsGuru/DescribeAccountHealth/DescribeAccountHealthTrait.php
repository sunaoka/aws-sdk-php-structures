<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAccountHealth;

trait DescribeAccountHealthTrait
{
    /**
     * @param DescribeAccountHealthRequest $args
     * @return DescribeAccountHealthResponse
     */
    public function describeAccountHealth(DescribeAccountHealthRequest $args)
    {
        $result = parent::describeAccountHealth($args->toArray());
        return new DescribeAccountHealthResponse($result->toArray());
    }
}
