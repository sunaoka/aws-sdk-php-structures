<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTerminationPolicyTypes;

trait DescribeTerminationPolicyTypesTrait
{
    /**
     * @return DescribeTerminationPolicyTypesResponse
     */
    public function describeTerminationPolicyTypes()
    {
        $result = parent::describeTerminationPolicyTypes();
        return new DescribeTerminationPolicyTypesResponse($result->toArray());
    }
}
