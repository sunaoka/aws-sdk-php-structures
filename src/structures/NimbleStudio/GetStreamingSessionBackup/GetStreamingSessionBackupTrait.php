<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSessionBackup;

trait GetStreamingSessionBackupTrait
{
    /**
     * @param GetStreamingSessionBackupRequest $args
     * @return GetStreamingSessionBackupResponse
     */
    public function getStreamingSessionBackup(GetStreamingSessionBackupRequest $args)
    {
        $result = parent::getStreamingSessionBackup($args->toArray());
        return new GetStreamingSessionBackupResponse($result->toArray());
    }
}
