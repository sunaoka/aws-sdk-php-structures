<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet;

trait DescribeStackSetTrait
{
    /**
     * @param DescribeStackSetRequest $args
     * @return DescribeStackSetResponse
     */
    public function describeStackSet(DescribeStackSetRequest $args)
    {
        $result = parent::describeStackSet($args->toArray());
        return new DescribeStackSetResponse($result->toArray());
    }
}
