<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppVersionResource;

trait DescribeAppVersionResourceTrait
{
    /**
     * @param DescribeAppVersionResourceRequest $args
     * @return DescribeAppVersionResourceResponse
     */
    public function describeAppVersionResource(DescribeAppVersionResourceRequest $args)
    {
        $result = parent::describeAppVersionResource($args->toArray());
        return new DescribeAppVersionResourceResponse($result->toArray());
    }
}
