<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationSubnetGroupIdentifier
 */
class DeleteReplicationSubnetGroupRequest extends Request
{
    /**
     * @param array{ReplicationSubnetGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
