<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackInstance;

trait DescribeStackInstanceTrait
{
    /**
     * @param DescribeStackInstanceRequest $args
     * @return DescribeStackInstanceResponse
     */
    public function describeStackInstance(DescribeStackInstanceRequest $args)
    {
        $result = parent::describeStackInstance($args->toArray());
        return new DescribeStackInstanceResponse($result->toArray());
    }
}
