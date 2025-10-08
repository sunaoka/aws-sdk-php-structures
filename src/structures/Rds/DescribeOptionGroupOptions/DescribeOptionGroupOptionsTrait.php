<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroupOptions;

trait DescribeOptionGroupOptionsTrait
{
    /**
     * @param DescribeOptionGroupOptionsRequest $args
     * @return DescribeOptionGroupOptionsResponse
     */
    public function describeOptionGroupOptions(DescribeOptionGroupOptionsRequest $args)
    {
        $result = parent::describeOptionGroupOptions($args->toArray());
        return new DescribeOptionGroupOptionsResponse($result->toArray());
    }
}
