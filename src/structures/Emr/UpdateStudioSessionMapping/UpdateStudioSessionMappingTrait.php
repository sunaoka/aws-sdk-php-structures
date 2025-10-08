<?php

namespace Sunaoka\Aws\Structures\Emr\UpdateStudioSessionMapping;

trait UpdateStudioSessionMappingTrait
{
    /**
     * @param UpdateStudioSessionMappingRequest $args
     * @return void
     */
    public function updateStudioSessionMapping(UpdateStudioSessionMappingRequest $args)
    {
        parent::updateStudioSessionMapping($args->toArray());
    }
}
