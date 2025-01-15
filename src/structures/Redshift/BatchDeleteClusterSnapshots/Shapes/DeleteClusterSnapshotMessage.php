<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchDeleteClusterSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotIdentifier
 * @property string|null $SnapshotClusterIdentifier
 */
class DeleteClusterSnapshotMessage extends Shape
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     SnapshotClusterIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
