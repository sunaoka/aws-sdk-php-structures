<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotName
 */
class DeleteSnapshotRequest extends Request
{
    /**
     * @param array{SnapshotName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
