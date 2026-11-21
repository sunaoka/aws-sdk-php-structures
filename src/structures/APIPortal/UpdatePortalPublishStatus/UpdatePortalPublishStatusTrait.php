<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdatePortalPublishStatus;

trait UpdatePortalPublishStatusTrait
{
    /**
     * @param UpdatePortalPublishStatusRequest $args
     * @return void
     */
    public function updatePortalPublishStatus(UpdatePortalPublishStatusRequest $args)
    {
        parent::updatePortalPublishStatus($args->toArray());
    }
}
