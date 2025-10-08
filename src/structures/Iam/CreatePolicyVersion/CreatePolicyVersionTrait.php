<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicyVersion;

trait CreatePolicyVersionTrait
{
    /**
     * @param CreatePolicyVersionRequest $args
     * @return CreatePolicyVersionResponse
     */
    public function createPolicyVersion(CreatePolicyVersionRequest $args)
    {
        $result = parent::createPolicyVersion($args->toArray());
        return new CreatePolicyVersionResponse($result->toArray());
    }
}
