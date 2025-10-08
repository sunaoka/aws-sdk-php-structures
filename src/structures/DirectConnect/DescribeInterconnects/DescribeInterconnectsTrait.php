<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects;

trait DescribeInterconnectsTrait
{
    /**
     * @param DescribeInterconnectsRequest $args
     * @return DescribeInterconnectsResponse
     */
    public function describeInterconnects(DescribeInterconnectsRequest $args)
    {
        $result = parent::describeInterconnects($args->toArray());
        return new DescribeInterconnectsResponse($result->toArray());
    }
}
