<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateRLSPolicy;

trait CreateRLSPolicyTrait
{
    /**
     * @param CreateRLSPolicyRequest $args
     * @return CreateRLSPolicyResponse
     */
    public function createRLSPolicy(CreateRLSPolicyRequest $args)
    {
        $result = parent::createRLSPolicy($args->toArray());
        return new CreateRLSPolicyResponse($result->toArray());
    }
}
