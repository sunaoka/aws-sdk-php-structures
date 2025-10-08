<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribeEffectivePolicy;

trait DescribeEffectivePolicyTrait
{
    /**
     * @param DescribeEffectivePolicyRequest $args
     * @return DescribeEffectivePolicyResponse
     */
    public function describeEffectivePolicy(DescribeEffectivePolicyRequest $args)
    {
        $result = parent::describeEffectivePolicy($args->toArray());
        return new DescribeEffectivePolicyResponse($result->toArray());
    }
}
