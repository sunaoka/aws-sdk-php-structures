<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRuleOrgConfiguration;

trait GetCustomDetectionRuleOrgConfigurationTrait
{
    /**
     * @param GetCustomDetectionRuleOrgConfigurationRequest $args
     * @return GetCustomDetectionRuleOrgConfigurationResponse
     */
    public function getCustomDetectionRuleOrgConfiguration(GetCustomDetectionRuleOrgConfigurationRequest $args)
    {
        $result = parent::getCustomDetectionRuleOrgConfiguration($args->toArray());
        return new GetCustomDetectionRuleOrgConfigurationResponse($result->toArray());
    }
}
