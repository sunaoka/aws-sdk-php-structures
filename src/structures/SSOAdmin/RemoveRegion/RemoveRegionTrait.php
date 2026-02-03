<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\RemoveRegion;

trait RemoveRegionTrait
{
    /**
     * @param RemoveRegionRequest $args
     * @return RemoveRegionResponse
     */
    public function removeRegion(RemoveRegionRequest $args)
    {
        $result = parent::removeRegion($args->toArray());
        return new RemoveRegionResponse($result->toArray());
    }
}
