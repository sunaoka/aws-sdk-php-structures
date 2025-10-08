<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualRouter;

trait DescribeVirtualRouterTrait
{
    /**
     * @param DescribeVirtualRouterRequest $args
     * @return DescribeVirtualRouterResponse
     */
    public function describeVirtualRouter(DescribeVirtualRouterRequest $args)
    {
        $result = parent::describeVirtualRouter($args->toArray());
        return new DescribeVirtualRouterResponse($result->toArray());
    }
}
