<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchDeleteClusterSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SnapshotIdentifier
 * @property string|null $SnapshotClusterIdentifier
 * @property string|null $FailureCode
 * @property string|null $FailureReason
 */
class SnapshotErrorMessage extends Shape
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string|null,
     *     SnapshotClusterIdentifier?: string|null,
     *     FailureCode?: string|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
