<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudioSessionMappings;

trait ListStudioSessionMappingsTrait
{
    /**
     * @param ListStudioSessionMappingsRequest $args
     * @return ListStudioSessionMappingsResponse
     */
    public function listStudioSessionMappings(ListStudioSessionMappingsRequest $args)
    {
        $result = parent::listStudioSessionMappings($args->toArray());
        return new ListStudioSessionMappingsResponse($result->toArray());
    }
}
