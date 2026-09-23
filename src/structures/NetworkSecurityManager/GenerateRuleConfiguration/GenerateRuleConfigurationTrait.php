<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GenerateRuleConfiguration;

trait GenerateRuleConfigurationTrait
{
    /**
     * @param GenerateRuleConfigurationRequest $args
     * @return GenerateRuleConfigurationResponse
     */
    public function generateRuleConfiguration(GenerateRuleConfigurationRequest $args)
    {
        $result = parent::generateRuleConfiguration($args->toArray());
        return new GenerateRuleConfigurationResponse($result->toArray());
    }
}
