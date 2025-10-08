<?php

namespace Sunaoka\Aws\Structures\Emr\GetStudioSessionMapping;

trait GetStudioSessionMappingTrait
{
    /**
     * @param GetStudioSessionMappingRequest $args
     * @return GetStudioSessionMappingResponse
     */
    public function getStudioSessionMapping(GetStudioSessionMappingRequest $args)
    {
        $result = parent::getStudioSessionMapping($args->toArray());
        return new GetStudioSessionMappingResponse($result->toArray());
    }
}
