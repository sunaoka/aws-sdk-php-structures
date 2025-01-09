<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchDeleteClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DeleteClusterSnapshotMessage> $Identifiers
 */
class BatchDeleteClusterSnapshotsRequest extends Request
{
    /**
     * @param array{Identifiers: list<Shapes\DeleteClusterSnapshotMessage>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
