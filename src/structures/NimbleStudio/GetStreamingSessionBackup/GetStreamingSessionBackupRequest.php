<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingSessionBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $backupId
 * @property string $studioId
 */
class GetStreamingSessionBackupRequest extends Request
{
    /**
     * @param array{
     *     backupId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
