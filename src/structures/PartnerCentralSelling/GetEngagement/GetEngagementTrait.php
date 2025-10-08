<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement;

trait GetEngagementTrait
{
    /**
     * @param GetEngagementRequest $args
     * @return GetEngagementResponse
     */
    public function getEngagement(GetEngagementRequest $args)
    {
        $result = parent::getEngagement($args->toArray());
        return new GetEngagementResponse($result->toArray());
    }
}
