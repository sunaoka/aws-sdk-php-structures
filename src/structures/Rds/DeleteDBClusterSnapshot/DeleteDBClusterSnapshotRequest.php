<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterSnapshotIdentifier
 */
class DeleteDBClusterSnapshotRequest extends Request
{
    /**
     * @param array{DBClusterSnapshotIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
