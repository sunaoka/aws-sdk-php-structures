<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeConsumableResource;

trait DescribeConsumableResourceTrait
{
    /**
     * @param DescribeConsumableResourceRequest $args
     * @return DescribeConsumableResourceResponse
     */
    public function describeConsumableResource(DescribeConsumableResourceRequest $args)
    {
        $result = parent::describeConsumableResource($args->toArray());
        return new DescribeConsumableResourceResponse($result->toArray());
    }
}
