<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationTaskName
 * @property string $ReplicationTaskArn
 * @property int $ReplicationInstanceTaskLogSize
 */
class ReplicationInstanceTaskLog extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskName?: string,
     *     ReplicationTaskArn?: string,
     *     ReplicationInstanceTaskLogSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
