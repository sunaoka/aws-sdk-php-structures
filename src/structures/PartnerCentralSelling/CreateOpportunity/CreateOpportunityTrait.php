<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity;

trait CreateOpportunityTrait
{
    /**
     * @param CreateOpportunityRequest $args
     * @return CreateOpportunityResponse
     */
    public function createOpportunity(CreateOpportunityRequest $args)
    {
        $result = parent::createOpportunity($args->toArray());
        return new CreateOpportunityResponse($result->toArray());
    }
}
