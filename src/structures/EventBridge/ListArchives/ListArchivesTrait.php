<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListArchives;

trait ListArchivesTrait
{
    /**
     * @param ListArchivesRequest $args
     * @return ListArchivesResponse
     */
    public function listArchives(ListArchivesRequest $args)
    {
        $result = parent::listArchives($args->toArray());
        return new ListArchivesResponse($result->toArray());
    }
}
