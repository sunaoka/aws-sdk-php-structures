<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateSite;

trait UpdateSiteTrait
{
    /**
     * @param UpdateSiteRequest $args
     * @return UpdateSiteResponse
     */
    public function updateSite(UpdateSiteRequest $args)
    {
        $result = parent::updateSite($args->toArray());
        return new UpdateSiteResponse($result->toArray());
    }
}
