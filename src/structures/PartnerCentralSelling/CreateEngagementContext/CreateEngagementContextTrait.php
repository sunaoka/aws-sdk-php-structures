<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext;

trait CreateEngagementContextTrait
{
    /**
     * @param CreateEngagementContextRequest $args
     * @return CreateEngagementContextResponse
     */
    public function createEngagementContext(CreateEngagementContextRequest $args)
    {
        $result = parent::createEngagementContext($args->toArray());
        return new CreateEngagementContextResponse($result->toArray());
    }
}
