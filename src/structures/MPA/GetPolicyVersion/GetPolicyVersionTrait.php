<?php

namespace Sunaoka\Aws\Structures\MPA\GetPolicyVersion;

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
