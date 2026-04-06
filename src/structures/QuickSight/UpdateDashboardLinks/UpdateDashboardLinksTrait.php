<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardLinks;

trait UpdateDashboardLinksTrait
{
    /**
     * @param UpdateDashboardLinksRequest $args
     * @return UpdateDashboardLinksResponse
     */
    public function updateDashboardLinks(UpdateDashboardLinksRequest $args)
    {
        $result = parent::updateDashboardLinks($args->toArray());
        return new UpdateDashboardLinksResponse($result->toArray());
    }
}
