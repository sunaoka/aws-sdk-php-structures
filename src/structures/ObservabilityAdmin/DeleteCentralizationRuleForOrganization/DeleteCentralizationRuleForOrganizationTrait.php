<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteCentralizationRuleForOrganization;

trait DeleteCentralizationRuleForOrganizationTrait
{
    /**
     * @param DeleteCentralizationRuleForOrganizationRequest $args
     * @return void
     */
    public function deleteCentralizationRuleForOrganization(DeleteCentralizationRuleForOrganizationRequest $args)
    {
        parent::deleteCentralizationRuleForOrganization($args->toArray());
    }
}
