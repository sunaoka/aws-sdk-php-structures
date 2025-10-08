<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualService;

trait DescribeVirtualServiceTrait
{
    /**
     * @param DescribeVirtualServiceRequest $args
     * @return DescribeVirtualServiceResponse
     */
    public function describeVirtualService(DescribeVirtualServiceRequest $args)
    {
        $result = parent::describeVirtualService($args->toArray());
        return new DescribeVirtualServiceResponse($result->toArray());
    }
}
