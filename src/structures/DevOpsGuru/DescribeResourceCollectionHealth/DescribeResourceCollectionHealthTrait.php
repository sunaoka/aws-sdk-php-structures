<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeResourceCollectionHealth;

trait DescribeResourceCollectionHealthTrait
{
    /**
     * @param DescribeResourceCollectionHealthRequest $args
     * @return DescribeResourceCollectionHealthResponse
     */
    public function describeResourceCollectionHealth(DescribeResourceCollectionHealthRequest $args)
    {
        $result = parent::describeResourceCollectionHealth($args->toArray());
        return new DescribeResourceCollectionHealthResponse($result->toArray());
    }
}
