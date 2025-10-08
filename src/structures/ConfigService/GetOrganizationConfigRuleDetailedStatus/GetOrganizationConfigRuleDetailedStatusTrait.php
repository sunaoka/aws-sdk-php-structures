<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConfigRuleDetailedStatus;

trait GetOrganizationConfigRuleDetailedStatusTrait
{
    /**
     * @param GetOrganizationConfigRuleDetailedStatusRequest $args
     * @return GetOrganizationConfigRuleDetailedStatusResponse
     */
    public function getOrganizationConfigRuleDetailedStatus(GetOrganizationConfigRuleDetailedStatusRequest $args)
    {
        $result = parent::getOrganizationConfigRuleDetailedStatus($args->toArray());
        return new GetOrganizationConfigRuleDetailedStatusResponse($result->toArray());
    }
}
