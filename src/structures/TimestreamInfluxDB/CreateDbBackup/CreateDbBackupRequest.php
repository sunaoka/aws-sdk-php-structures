<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $dbResourceId
 * @property int<1, 3650>|null $retentionDays
 * @property array<string, string>|null $tags
 */
class CreateDbBackupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     dbResourceId: string,
     *     retentionDays?: int<1, 3650>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
