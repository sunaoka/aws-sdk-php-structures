<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeResource;

trait DescribeResourceTrait
{
    /**
     * @param DescribeResourceRequest $args
     * @return DescribeResourceResponse
     */
    public function describeResource(DescribeResourceRequest $args)
    {
        $result = parent::describeResource($args->toArray());
        return new DescribeResourceResponse($result->toArray());
    }
}
