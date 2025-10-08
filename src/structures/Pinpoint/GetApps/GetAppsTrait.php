<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApps;

trait GetAppsTrait
{
    /**
     * @param GetAppsRequest $args
     * @return GetAppsResponse
     */
    public function getApps(GetAppsRequest $args)
    {
        $result = parent::getApps($args->toArray());
        return new GetAppsResponse($result->toArray());
    }
}
