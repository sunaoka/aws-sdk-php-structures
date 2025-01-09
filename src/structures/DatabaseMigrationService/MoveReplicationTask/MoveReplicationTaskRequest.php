<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\MoveReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 * @property string $TargetReplicationInstanceArn
 */
class MoveReplicationTaskRequest extends Request
{
    /**
     * @param array{
     *     ReplicationTaskArn: string,
     *     TargetReplicationInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
