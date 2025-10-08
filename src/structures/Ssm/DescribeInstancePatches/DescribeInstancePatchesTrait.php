<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatches;

trait DescribeInstancePatchesTrait
{
    /**
     * @param DescribeInstancePatchesRequest $args
     * @return DescribeInstancePatchesResponse
     */
    public function describeInstancePatches(DescribeInstancePatchesRequest $args)
    {
        $result = parent::describeInstancePatches($args->toArray());
        return new DescribeInstancePatchesResponse($result->toArray());
    }
}
