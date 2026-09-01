<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateCustomDetectionRuleOrgConfiguration;

trait CreateCustomDetectionRuleOrgConfigurationTrait
{
    /**
     * @param CreateCustomDetectionRuleOrgConfigurationRequest $args
     * @return CreateCustomDetectionRuleOrgConfigurationResponse
     */
    public function createCustomDetectionRuleOrgConfiguration(CreateCustomDetectionRuleOrgConfigurationRequest $args)
    {
        $result = parent::createCustomDetectionRuleOrgConfiguration($args->toArray());
        return new CreateCustomDetectionRuleOrgConfigurationResponse($result->toArray());
    }
}
