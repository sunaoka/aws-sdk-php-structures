<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotTier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property 'archive' $StorageTier
 * @property bool $DryRun
 */
class ModifySnapshotTierRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     StorageTier?: 'archive',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
