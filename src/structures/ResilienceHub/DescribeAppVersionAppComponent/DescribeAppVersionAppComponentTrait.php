<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionAppComponent;

trait DescribeAppVersionAppComponentTrait
{
    /**
     * @param DescribeAppVersionAppComponentRequest $args
     * @return DescribeAppVersionAppComponentResponse
     */
    public function describeAppVersionAppComponent(DescribeAppVersionAppComponentRequest $args)
    {
        $result = parent::describeAppVersionAppComponent($args->toArray());
        return new DescribeAppVersionAppComponentResponse($result->toArray());
    }
}
