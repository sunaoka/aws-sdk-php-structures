<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateCentralizationRuleForOrganization;

trait CreateCentralizationRuleForOrganizationTrait
{
    /**
     * @param CreateCentralizationRuleForOrganizationRequest $args
     * @return CreateCentralizationRuleForOrganizationResponse
     */
    public function createCentralizationRuleForOrganization(CreateCentralizationRuleForOrganizationRequest $args)
    {
        $result = parent::createCentralizationRuleForOrganization($args->toArray());
        return new CreateCentralizationRuleForOrganizationResponse($result->toArray());
    }
}
