<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyVersion;

trait CreateTrafficPolicyVersionTrait
{
    /**
     * @param CreateTrafficPolicyVersionRequest $args
     * @return CreateTrafficPolicyVersionResponse
     */
    public function createTrafficPolicyVersion(CreateTrafficPolicyVersionRequest $args)
    {
        $result = parent::createTrafficPolicyVersion($args->toArray());
        return new CreateTrafficPolicyVersionResponse($result->toArray());
    }
}
