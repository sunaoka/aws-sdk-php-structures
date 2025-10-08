<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupReferences;

trait DescribeSecurityGroupReferencesTrait
{
    /**
     * @param DescribeSecurityGroupReferencesRequest $args
     * @return DescribeSecurityGroupReferencesResponse
     */
    public function describeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest $args)
    {
        $result = parent::describeSecurityGroupReferences($args->toArray());
        return new DescribeSecurityGroupReferencesResponse($result->toArray());
    }
}
