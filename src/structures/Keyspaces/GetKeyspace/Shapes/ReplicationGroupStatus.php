<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetKeyspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING' $keyspaceStatus
 * @property string $tablesReplicationProgress
 */
class ReplicationGroupStatus extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     keyspaceStatus: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING',
     *     tablesReplicationProgress?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
