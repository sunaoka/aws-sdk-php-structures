<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 */
class StopReplicationRequest extends Request
{
    /**
     * @param array{ReplicationConfigArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
