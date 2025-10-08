<?php

namespace Sunaoka\Aws\Structures\Emr\CreateStudioSessionMapping;

trait CreateStudioSessionMappingTrait
{
    /**
     * @param CreateStudioSessionMappingRequest $args
     * @return void
     */
    public function createStudioSessionMapping(CreateStudioSessionMappingRequest $args)
    {
        parent::createStudioSessionMapping($args->toArray());
    }
}
