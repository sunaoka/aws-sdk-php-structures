<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 */
class DeleteReplicationInstanceRequest extends Request
{
    /**
     * @param array{ReplicationInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
