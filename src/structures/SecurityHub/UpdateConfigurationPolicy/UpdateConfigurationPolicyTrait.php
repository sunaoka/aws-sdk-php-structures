<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConfigurationPolicy;

trait UpdateConfigurationPolicyTrait
{
    /**
     * @param UpdateConfigurationPolicyRequest $args
     * @return UpdateConfigurationPolicyResponse
     */
    public function updateConfigurationPolicy(UpdateConfigurationPolicyRequest $args)
    {
        $result = parent::updateConfigurationPolicy($args->toArray());
        return new UpdateConfigurationPolicyResponse($result->toArray());
    }
}
