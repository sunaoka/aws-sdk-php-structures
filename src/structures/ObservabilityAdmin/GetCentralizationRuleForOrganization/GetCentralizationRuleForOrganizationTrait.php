<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization;

trait GetCentralizationRuleForOrganizationTrait
{
    /**
     * @param GetCentralizationRuleForOrganizationRequest $args
     * @return GetCentralizationRuleForOrganizationResponse
     */
    public function getCentralizationRuleForOrganization(GetCentralizationRuleForOrganizationRequest $args)
    {
        $result = parent::getCentralizationRuleForOrganization($args->toArray());
        return new GetCentralizationRuleForOrganizationResponse($result->toArray());
    }
}
