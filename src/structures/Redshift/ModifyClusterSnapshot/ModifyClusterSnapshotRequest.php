<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotIdentifier
 * @property int|null $ManualSnapshotRetentionPeriod
 * @property bool|null $Force
 */
class ModifyClusterSnapshotRequest extends Request
{
    /**
     * @param array{
     *     SnapshotIdentifier: string,
     *     ManualSnapshotRetentionPeriod?: int|null,
     *     Force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
