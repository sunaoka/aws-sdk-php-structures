<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotTier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int|null $TemporaryRestoreDays
 * @property bool|null $PermanentRestore
 * @property bool|null $DryRun
 */
class RestoreSnapshotTierRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     TemporaryRestoreDays?: int|null,
     *     PermanentRestore?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
