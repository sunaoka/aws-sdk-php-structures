<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateCentralizationRuleForOrganization;

trait UpdateCentralizationRuleForOrganizationTrait
{
    /**
     * @param UpdateCentralizationRuleForOrganizationRequest $args
     * @return UpdateCentralizationRuleForOrganizationResponse
     */
    public function updateCentralizationRuleForOrganization(UpdateCentralizationRuleForOrganizationRequest $args)
    {
        $result = parent::updateCentralizationRuleForOrganization($args->toArray());
        return new UpdateCentralizationRuleForOrganizationResponse($result->toArray());
    }
}
