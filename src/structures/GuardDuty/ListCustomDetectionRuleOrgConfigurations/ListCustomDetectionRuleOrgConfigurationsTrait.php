<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleOrgConfigurations;

trait ListCustomDetectionRuleOrgConfigurationsTrait
{
    /**
     * @param ListCustomDetectionRuleOrgConfigurationsRequest $args
     * @return ListCustomDetectionRuleOrgConfigurationsResponse
     */
    public function listCustomDetectionRuleOrgConfigurations(ListCustomDetectionRuleOrgConfigurationsRequest $args)
    {
        $result = parent::listCustomDetectionRuleOrgConfigurations($args->toArray());
        return new ListCustomDetectionRuleOrgConfigurationsResponse($result->toArray());
    }
}
