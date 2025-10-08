<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAccessPolicy;

trait DescribeAccessPolicyTrait
{
    /**
     * @param DescribeAccessPolicyRequest $args
     * @return DescribeAccessPolicyResponse
     */
    public function describeAccessPolicy(DescribeAccessPolicyRequest $args)
    {
        $result = parent::describeAccessPolicy($args->toArray());
        return new DescribeAccessPolicyResponse($result->toArray());
    }
}
