<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationTaskArn
 */
class DeleteReplicationTaskRequest extends Request
{
    /**
     * @param array{ReplicationTaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
