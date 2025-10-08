<?php

namespace Sunaoka\Aws\Structures\Iot\GetPolicyVersion;

trait GetPolicyVersionTrait
{
    /**
     * @param GetPolicyVersionRequest $args
     * @return GetPolicyVersionResponse
     */
    public function getPolicyVersion(GetPolicyVersionRequest $args)
    {
        $result = parent::getPolicyVersion($args->toArray());
        return new GetPolicyVersionResponse($result->toArray());
    }
}
