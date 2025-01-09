<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReplicationInstanceTaskLogsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
