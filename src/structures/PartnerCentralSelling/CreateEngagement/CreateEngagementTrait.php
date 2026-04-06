<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement;

trait CreateEngagementTrait
{
    /**
     * @param CreateEngagementRequest $args
     * @return CreateEngagementResponse
     */
    public function createEngagement(CreateEngagementRequest $args)
    {
        $result = parent::createEngagement($args->toArray());
        return new CreateEngagementResponse($result->toArray());
    }
}
