<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeFilter;

trait DescribeFilterTrait
{
    /**
     * @param DescribeFilterRequest $args
     * @return DescribeFilterResponse
     */
    public function describeFilter(DescribeFilterRequest $args)
    {
        $result = parent::describeFilter($args->toArray());
        return new DescribeFilterResponse($result->toArray());
    }
}
