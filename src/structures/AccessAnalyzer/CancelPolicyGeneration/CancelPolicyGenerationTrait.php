<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CancelPolicyGeneration;

trait CancelPolicyGenerationTrait
{
    /**
     * @param CancelPolicyGenerationRequest $args
     * @return CancelPolicyGenerationResponse
     */
    public function cancelPolicyGeneration(CancelPolicyGenerationRequest $args)
    {
        $result = parent::cancelPolicyGeneration($args->toArray());
        return new CancelPolicyGenerationResponse($result->toArray());
    }
}
