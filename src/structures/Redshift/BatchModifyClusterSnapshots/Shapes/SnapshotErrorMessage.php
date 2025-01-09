<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchModifyClusterSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnapshotIdentifier
 * @property string $SnapshotClusterIdentifier
 * @property string $FailureCode
 * @property string $FailureReason
 */
class SnapshotErrorMessage extends Shape
{
    /**
     * @param array{
     *     SnapshotIdentifier?: string,
     *     SnapshotClusterIdentifier?: string,
     *     FailureCode?: string,
     *     FailureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
