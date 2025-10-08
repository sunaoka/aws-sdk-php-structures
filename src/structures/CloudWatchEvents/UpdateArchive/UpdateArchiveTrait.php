<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateArchive;

trait UpdateArchiveTrait
{
    /**
     * @param UpdateArchiveRequest $args
     * @return UpdateArchiveResponse
     */
    public function updateArchive(UpdateArchiveRequest $args)
    {
        $result = parent::updateArchive($args->toArray());
        return new UpdateArchiveResponse($result->toArray());
    }
}
