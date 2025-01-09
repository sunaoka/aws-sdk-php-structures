<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\DeleteClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotArn
 */
class DeleteClusterSnapshotRequest extends Request
{
    /**
     * @param array{snapshotArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
