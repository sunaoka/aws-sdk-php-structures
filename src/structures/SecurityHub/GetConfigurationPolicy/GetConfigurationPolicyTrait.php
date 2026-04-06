<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConfigurationPolicy;

trait GetConfigurationPolicyTrait
{
    /**
     * @param GetConfigurationPolicyRequest $args
     * @return GetConfigurationPolicyResponse
     */
    public function getConfigurationPolicy(GetConfigurationPolicyRequest $args)
    {
        $result = parent::getConfigurationPolicy($args->toArray());
        return new GetConfigurationPolicyResponse($result->toArray());
    }
}
