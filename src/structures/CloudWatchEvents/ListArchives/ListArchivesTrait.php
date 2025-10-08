<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListArchives;

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
