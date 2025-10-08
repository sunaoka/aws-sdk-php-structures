<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass;

trait UpdateChannelClassTrait
{
    /**
     * @param UpdateChannelClassRequest $args
     * @return UpdateChannelClassResponse
     */
    public function updateChannelClass(UpdateChannelClassRequest $args)
    {
        $result = parent::updateChannelClass($args->toArray());
        return new UpdateChannelClassResponse($result->toArray());
    }
}
