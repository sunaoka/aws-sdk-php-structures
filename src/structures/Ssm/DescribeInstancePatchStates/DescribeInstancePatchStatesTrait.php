<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStates;

trait DescribeInstancePatchStatesTrait
{
    /**
     * @param DescribeInstancePatchStatesRequest $args
     * @return DescribeInstancePatchStatesResponse
     */
    public function describeInstancePatchStates(DescribeInstancePatchStatesRequest $args)
    {
        $result = parent::describeInstancePatchStates($args->toArray());
        return new DescribeInstancePatchStatesResponse($result->toArray());
    }
}
