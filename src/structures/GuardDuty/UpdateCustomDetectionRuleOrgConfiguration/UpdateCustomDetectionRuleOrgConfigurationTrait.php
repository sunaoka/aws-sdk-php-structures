<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateCustomDetectionRuleOrgConfiguration;

trait UpdateCustomDetectionRuleOrgConfigurationTrait
{
    /**
     * @param UpdateCustomDetectionRuleOrgConfigurationRequest $args
     * @return UpdateCustomDetectionRuleOrgConfigurationResponse
     */
    public function updateCustomDetectionRuleOrgConfiguration(UpdateCustomDetectionRuleOrgConfigurationRequest $args)
    {
        $result = parent::updateCustomDetectionRuleOrgConfiguration($args->toArray());
        return new UpdateCustomDetectionRuleOrgConfigurationResponse($result->toArray());
    }
}
