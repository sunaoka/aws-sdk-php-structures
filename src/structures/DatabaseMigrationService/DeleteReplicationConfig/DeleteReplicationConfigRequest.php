<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationConfigArn
 */
class DeleteReplicationConfigRequest extends Request
{
    /**
     * @param array{ReplicationConfigArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
