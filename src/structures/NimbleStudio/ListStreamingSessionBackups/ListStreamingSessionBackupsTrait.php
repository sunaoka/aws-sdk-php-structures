<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingSessionBackups;

trait ListStreamingSessionBackupsTrait
{
    /**
     * @param ListStreamingSessionBackupsRequest $args
     * @return ListStreamingSessionBackupsResponse
     */
    public function listStreamingSessionBackups(ListStreamingSessionBackupsRequest $args)
    {
        $result = parent::listStreamingSessionBackups($args->toArray());
        return new ListStreamingSessionBackupsResponse($result->toArray());
    }
}
