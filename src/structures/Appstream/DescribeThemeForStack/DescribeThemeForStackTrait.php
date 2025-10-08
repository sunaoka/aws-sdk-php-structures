<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeThemeForStack;

trait DescribeThemeForStackTrait
{
    /**
     * @param DescribeThemeForStackRequest $args
     * @return DescribeThemeForStackResponse
     */
    public function describeThemeForStack(DescribeThemeForStackRequest $args)
    {
        $result = parent::describeThemeForStack($args->toArray());
        return new DescribeThemeForStackResponse($result->toArray());
    }
}
