<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListCentralizationRulesForOrganization;

trait ListCentralizationRulesForOrganizationTrait
{
    /**
     * @param ListCentralizationRulesForOrganizationRequest $args
     * @return ListCentralizationRulesForOrganizationResponse
     */
    public function listCentralizationRulesForOrganization(ListCentralizationRulesForOrganizationRequest $args)
    {
        $result = parent::listCentralizationRulesForOrganization($args->toArray());
        return new ListCentralizationRulesForOrganizationResponse($result->toArray());
    }
}
