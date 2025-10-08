<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity;

trait UpdateOpportunityTrait
{
    /**
     * @param UpdateOpportunityRequest $args
     * @return UpdateOpportunityResponse
     */
    public function updateOpportunity(UpdateOpportunityRequest $args)
    {
        $result = parent::updateOpportunity($args->toArray());
        return new UpdateOpportunityResponse($result->toArray());
    }
}
