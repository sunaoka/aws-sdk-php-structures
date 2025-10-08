<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribePolicies;

trait DescribePoliciesTrait
{
    /**
     * @param DescribePoliciesRequest $args
     * @return DescribePoliciesResponse
     */
    public function describePolicies(DescribePoliciesRequest $args)
    {
        $result = parent::describePolicies($args->toArray());
        return new DescribePoliciesResponse($result->toArray());
    }
}
