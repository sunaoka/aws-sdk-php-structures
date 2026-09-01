<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteCustomDetectionRuleOrgConfiguration;

trait DeleteCustomDetectionRuleOrgConfigurationTrait
{
    /**
     * @param DeleteCustomDetectionRuleOrgConfigurationRequest $args
     * @return DeleteCustomDetectionRuleOrgConfigurationResponse
     */
    public function deleteCustomDetectionRuleOrgConfiguration(DeleteCustomDetectionRuleOrgConfigurationRequest $args)
    {
        $result = parent::deleteCustomDetectionRuleOrgConfiguration($args->toArray());
        return new DeleteCustomDetectionRuleOrgConfigurationResponse($result->toArray());
    }
}
