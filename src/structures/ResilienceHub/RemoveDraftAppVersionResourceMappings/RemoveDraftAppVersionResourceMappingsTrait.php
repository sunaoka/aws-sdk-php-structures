<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\RemoveDraftAppVersionResourceMappings;

trait RemoveDraftAppVersionResourceMappingsTrait
{
    /**
     * @param RemoveDraftAppVersionResourceMappingsRequest $args
     * @return RemoveDraftAppVersionResourceMappingsResponse
     */
    public function removeDraftAppVersionResourceMappings(RemoveDraftAppVersionResourceMappingsRequest $args)
    {
        $result = parent::removeDraftAppVersionResourceMappings($args->toArray());
        return new RemoveDraftAppVersionResourceMappingsResponse($result->toArray());
    }
}
