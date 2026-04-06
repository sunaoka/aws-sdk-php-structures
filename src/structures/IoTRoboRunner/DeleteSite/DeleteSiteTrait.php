<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\DeleteSite;

trait DeleteSiteTrait
{
    /**
     * @param DeleteSiteRequest $args
     * @return DeleteSiteResponse
     */
    public function deleteSite(DeleteSiteRequest $args)
    {
        $result = parent::deleteSite($args->toArray());
        return new DeleteSiteResponse($result->toArray());
    }
}
