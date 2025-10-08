<?php

namespace Sunaoka\Aws\Structures\Organizations\DescribePolicy;

trait DescribePolicyTrait
{
    /**
     * @param DescribePolicyRequest $args
     * @return DescribePolicyResponse
     */
    public function describePolicy(DescribePolicyRequest $args)
    {
        $result = parent::describePolicy($args->toArray());
        return new DescribePolicyResponse($result->toArray());
    }
}
