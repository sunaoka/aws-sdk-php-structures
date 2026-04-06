<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConfigurationPolicy;

trait CreateConfigurationPolicyTrait
{
    /**
     * @param CreateConfigurationPolicyRequest $args
     * @return CreateConfigurationPolicyResponse
     */
    public function createConfigurationPolicy(CreateConfigurationPolicyRequest $args)
    {
        $result = parent::createConfigurationPolicy($args->toArray());
        return new CreateConfigurationPolicyResponse($result->toArray());
    }
}
