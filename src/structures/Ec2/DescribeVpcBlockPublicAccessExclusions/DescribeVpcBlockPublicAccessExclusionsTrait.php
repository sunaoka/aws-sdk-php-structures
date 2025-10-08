<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessExclusions;

trait DescribeVpcBlockPublicAccessExclusionsTrait
{
    /**
     * @param DescribeVpcBlockPublicAccessExclusionsRequest $args
     * @return DescribeVpcBlockPublicAccessExclusionsResponse
     */
    public function describeVpcBlockPublicAccessExclusions(DescribeVpcBlockPublicAccessExclusionsRequest $args)
    {
        $result = parent::describeVpcBlockPublicAccessExclusions($args->toArray());
        return new DescribeVpcBlockPublicAccessExclusionsResponse($result->toArray());
    }
}
