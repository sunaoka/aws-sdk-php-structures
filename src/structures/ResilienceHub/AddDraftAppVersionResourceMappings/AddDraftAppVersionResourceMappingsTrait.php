<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\AddDraftAppVersionResourceMappings;

trait AddDraftAppVersionResourceMappingsTrait
{
    /**
     * @param AddDraftAppVersionResourceMappingsRequest $args
     * @return AddDraftAppVersionResourceMappingsResponse
     */
    public function addDraftAppVersionResourceMappings(AddDraftAppVersionResourceMappingsRequest $args)
    {
        $result = parent::addDraftAppVersionResourceMappings($args->toArray());
        return new AddDraftAppVersionResourceMappingsResponse($result->toArray());
    }
}
