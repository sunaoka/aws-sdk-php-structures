<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotArn
 */
class GetClusterSnapshotRequest extends Request
{
    /**
     * @param array{snapshotArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
