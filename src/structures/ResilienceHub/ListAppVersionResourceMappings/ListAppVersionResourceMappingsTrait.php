<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppVersionResourceMappings;

trait ListAppVersionResourceMappingsTrait
{
    /**
     * @param ListAppVersionResourceMappingsRequest $args
     * @return ListAppVersionResourceMappingsResponse
     */
    public function listAppVersionResourceMappings(ListAppVersionResourceMappingsRequest $args)
    {
        $result = parent::listAppVersionResourceMappings($args->toArray());
        return new ListAppVersionResourceMappingsResponse($result->toArray());
    }
}
