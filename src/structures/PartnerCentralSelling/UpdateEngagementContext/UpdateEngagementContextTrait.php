<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext;

trait UpdateEngagementContextTrait
{
    /**
     * @param UpdateEngagementContextRequest $args
     * @return UpdateEngagementContextResponse
     */
    public function updateEngagementContext(UpdateEngagementContextRequest $args)
    {
        $result = parent::updateEngagementContext($args->toArray());
        return new UpdateEngagementContextResponse($result->toArray());
    }
}
