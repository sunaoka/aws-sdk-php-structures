<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SubmitOpportunity;

trait SubmitOpportunityTrait
{
    /**
     * @param SubmitOpportunityRequest $args
     * @return void
     */
    public function submitOpportunity(SubmitOpportunityRequest $args)
    {
        parent::submitOpportunity($args->toArray());
    }
}
