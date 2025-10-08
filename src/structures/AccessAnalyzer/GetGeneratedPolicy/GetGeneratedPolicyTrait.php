<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy;

trait GetGeneratedPolicyTrait
{
    /**
     * @param GetGeneratedPolicyRequest $args
     * @return GetGeneratedPolicyResponse
     */
    public function getGeneratedPolicy(GetGeneratedPolicyRequest $args)
    {
        $result = parent::getGeneratedPolicy($args->toArray());
        return new GetGeneratedPolicyResponse($result->toArray());
    }
}
