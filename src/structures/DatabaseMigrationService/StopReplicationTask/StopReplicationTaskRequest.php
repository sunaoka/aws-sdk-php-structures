<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 */
class StopReplicationTaskRequest extends Request
{
    /**
     * @param array{ReplicationTaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
