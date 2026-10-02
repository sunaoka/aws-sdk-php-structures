<?php

namespace Sunaoka\Aws\Structures\Health\DescribeServiceLifecycle;

trait DescribeServiceLifecycleTrait
{
    /**
     * @param DescribeServiceLifecycleRequest $args
     * @return DescribeServiceLifecycleResponse
     */
    public function describeServiceLifecycle(DescribeServiceLifecycleRequest $args)
    {
        $result = parent::describeServiceLifecycle($args->toArray());
        return new DescribeServiceLifecycleResponse($result->toArray());
    }
}
