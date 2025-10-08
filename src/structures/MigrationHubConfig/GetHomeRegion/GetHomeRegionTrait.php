<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\GetHomeRegion;

trait GetHomeRegionTrait
{
    /**
     * @param GetHomeRegionRequest $args
     * @return GetHomeRegionResponse
     */
    public function getHomeRegion(GetHomeRegionRequest $args)
    {
        $result = parent::getHomeRegion($args->toArray());
        return new GetHomeRegionResponse($result->toArray());
    }
}
