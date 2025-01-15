<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstanceTaskLogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationTaskName
 * @property string|null $ReplicationTaskArn
 * @property int|null $ReplicationInstanceTaskLogSize
 */
class ReplicationInstanceTaskLog extends Shape
{
    /**
     * @param array{
     *     ReplicationTaskName?: string|null,
     *     ReplicationTaskArn?: string|null,
     *     ReplicationInstanceTaskLogSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
