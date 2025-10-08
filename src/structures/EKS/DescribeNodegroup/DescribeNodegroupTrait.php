<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeNodegroup;

trait DescribeNodegroupTrait
{
    /**
     * @param DescribeNodegroupRequest $args
     * @return DescribeNodegroupResponse
     */
    public function describeNodegroup(DescribeNodegroupRequest $args)
    {
        $result = parent::describeNodegroup($args->toArray());
        return new DescribeNodegroupResponse($result->toArray());
    }
}
