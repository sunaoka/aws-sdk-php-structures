<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeLifecycleHookTypes;

trait DescribeLifecycleHookTypesTrait
{
    /**
     * @return DescribeLifecycleHookTypesResponse
     */
    public function describeLifecycleHookTypes()
    {
        $result = parent::describeLifecycleHookTypes();
        return new DescribeLifecycleHookTypesResponse($result->toArray());
    }
}
