<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReplicationInstanceTaskLogsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
