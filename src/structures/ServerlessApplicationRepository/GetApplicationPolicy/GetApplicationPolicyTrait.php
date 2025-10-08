<?php

namespace Sunaoka\Aws\Structures\ServerlessApplicationRepository\GetApplicationPolicy;

trait GetApplicationPolicyTrait
{
    /**
     * @param GetApplicationPolicyRequest $args
     * @return GetApplicationPolicyResponse
     */
    public function getApplicationPolicy(GetApplicationPolicyRequest $args)
    {
        $result = parent::getApplicationPolicy($args->toArray());
        return new GetApplicationPolicyResponse($result->toArray());
    }
}
