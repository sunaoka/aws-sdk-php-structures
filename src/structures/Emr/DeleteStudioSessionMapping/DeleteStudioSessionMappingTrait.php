<?php

namespace Sunaoka\Aws\Structures\Emr\DeleteStudioSessionMapping;

trait DeleteStudioSessionMappingTrait
{
    /**
     * @param DeleteStudioSessionMappingRequest $args
     * @return void
     */
    public function deleteStudioSessionMapping(DeleteStudioSessionMappingRequest $args)
    {
        parent::deleteStudioSessionMapping($args->toArray());
    }
}
