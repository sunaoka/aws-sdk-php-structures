<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAvailablePatches;

trait DescribeAvailablePatchesTrait
{
    /**
     * @param DescribeAvailablePatchesRequest $args
     * @return DescribeAvailablePatchesResponse
     */
    public function describeAvailablePatches(DescribeAvailablePatchesRequest $args)
    {
        $result = parent::describeAvailablePatches($args->toArray());
        return new DescribeAvailablePatchesResponse($result->toArray());
    }
}
