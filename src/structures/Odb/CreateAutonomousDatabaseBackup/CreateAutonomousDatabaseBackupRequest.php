<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property string|null $displayName
 * @property int<90, 3650>|null $retentionPeriodInDays
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateAutonomousDatabaseBackupRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     displayName?: string|null,
     *     retentionPeriodInDays?: int<90, 3650>|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
