<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchModifyClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SnapshotIdentifierList
 * @property int $ManualSnapshotRetentionPeriod
 * @property bool $Force
 */
class BatchModifyClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifierList: list<string>,
     *     ManualSnapshotRetentionPeriod?: int,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
