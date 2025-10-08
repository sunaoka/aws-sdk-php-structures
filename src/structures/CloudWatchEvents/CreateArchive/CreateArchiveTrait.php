<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateArchive;

trait CreateArchiveTrait
{
    /**
     * @param CreateArchiveRequest $args
     * @return CreateArchiveResponse
     */
    public function createArchive(CreateArchiveRequest $args)
    {
        $result = parent::createArchive($args->toArray());
        return new CreateArchiveResponse($result->toArray());
    }
}
