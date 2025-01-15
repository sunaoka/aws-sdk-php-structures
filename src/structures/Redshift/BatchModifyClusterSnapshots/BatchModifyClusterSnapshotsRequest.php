<?php

namespace Sunaoka\Aws\Structures\Redshift\BatchModifyClusterSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SnapshotIdentifierList
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property bool|null $Force
 */
class BatchModifyClusterSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifierList: list<string>,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
