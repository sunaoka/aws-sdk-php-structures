<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property int $ManualSnapshotRetentionPeriod
 * @property bool $Force
 */
class ModifyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int,
     *     Force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
