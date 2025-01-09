<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RestoreFromSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 */
class RestoreFromSnapshotRequest extends Request
{
    /**
     * @param array{SnapshotId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
