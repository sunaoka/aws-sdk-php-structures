<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property string $SnapshotClusterIdentifier
 */
class DeleteClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     SnapshotClusterIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
