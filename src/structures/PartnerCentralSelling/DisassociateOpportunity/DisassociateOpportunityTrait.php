<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\DisassociateOpportunity;

trait DisassociateOpportunityTrait
{
    /**
     * @param DisassociateOpportunityRequest $args
     * @return void
     */
    public function disassociateOpportunity(DisassociateOpportunityRequest $args)
    {
        parent::disassociateOpportunity($args->toArray());
    }
}
