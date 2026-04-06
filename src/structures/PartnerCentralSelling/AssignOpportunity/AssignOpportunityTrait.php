<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AssignOpportunity;

trait AssignOpportunityTrait
{
    /**
     * @param AssignOpportunityRequest $args
     * @return void
     */
    public function assignOpportunity(AssignOpportunityRequest $args)
    {
        parent::assignOpportunity($args->toArray());
    }
}
