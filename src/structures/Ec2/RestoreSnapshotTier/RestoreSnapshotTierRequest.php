<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotTier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property int $TemporaryRestoreDays
 * @property bool $PermanentRestore
 * @property bool $DryRun
 */
class RestoreSnapshotTierRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     TemporaryRestoreDays?: int,
     *     PermanentRestore?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
