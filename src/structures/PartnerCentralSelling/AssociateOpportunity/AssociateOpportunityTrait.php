<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssociateOpportunity;

trait AssociateOpportunityTrait
{
    /**
     * @param AssociateOpportunityRequest $args
     * @return void
     */
    public function associateOpportunity(AssociateOpportunityRequest $args)
    {
        parent::associateOpportunity($args->toArray());
    }
}
