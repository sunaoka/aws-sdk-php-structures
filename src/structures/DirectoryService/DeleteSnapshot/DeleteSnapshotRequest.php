<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{SnapshotId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
