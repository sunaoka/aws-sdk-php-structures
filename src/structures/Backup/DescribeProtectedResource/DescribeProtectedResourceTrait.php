<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeProtectedResource;

trait DescribeProtectedResourceTrait
{
    /**
     * @param DescribeProtectedResourceRequest $args
     * @return DescribeProtectedResourceResponse
     */
    public function describeProtectedResource(DescribeProtectedResourceRequest $args)
    {
        $result = parent::describeProtectedResource($args->toArray());
        return new DescribeProtectedResourceResponse($result->toArray());
    }
}
