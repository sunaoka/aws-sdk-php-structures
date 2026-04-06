<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity;

trait GetOpportunityTrait
{
    /**
     * @param GetOpportunityRequest $args
     * @return GetOpportunityResponse
     */
    public function getOpportunity(GetOpportunityRequest $args)
    {
        $result = parent::getOpportunity($args->toArray());
        return new GetOpportunityResponse($result->toArray());
    }
}
