<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLifecycleHooks;

trait DescribeLifecycleHooksTrait
{
    /**
     * @param DescribeLifecycleHooksRequest $args
     * @return DescribeLifecycleHooksResponse
     */
    public function describeLifecycleHooks(DescribeLifecycleHooksRequest $args)
    {
        $result = parent::describeLifecycleHooks($args->toArray());
        return new DescribeLifecycleHooksResponse($result->toArray());
    }
}
