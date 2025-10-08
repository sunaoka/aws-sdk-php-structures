<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal;

trait UpdatePortalTrait
{
    /**
     * @param UpdatePortalRequest $args
     * @return UpdatePortalResponse
     */
    public function updatePortal(UpdatePortalRequest $args)
    {
        $result = parent::updatePortal($args->toArray());
        return new UpdatePortalResponse($result->toArray());
    }
}
