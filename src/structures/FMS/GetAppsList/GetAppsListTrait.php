<?php

namespace Sunaoka\Aws\Structures\FMS\GetAppsList;

trait GetAppsListTrait
{
    /**
     * @param GetAppsListRequest $args
     * @return GetAppsListResponse
     */
    public function getAppsList(GetAppsListRequest $args)
    {
        $result = parent::getAppsList($args->toArray());
        return new GetAppsListResponse($result->toArray());
    }
}
