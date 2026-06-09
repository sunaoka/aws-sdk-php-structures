<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateAutonomousDatabaseBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseBackupId
 * @property int<90, 3650>|null $retentionPeriodInDays
 */
class UpdateAutonomousDatabaseBackupRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseBackupId: string,
     *     retentionPeriodInDays?: int<90, 3650>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
