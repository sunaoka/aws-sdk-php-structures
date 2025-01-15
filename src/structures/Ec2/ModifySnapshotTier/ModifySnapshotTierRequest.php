<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySnapshotTier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property 'archive'|null $StorageTier
 * @property bool|null $DryRun
 */
class ModifySnapshotTierRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     StorageTier?: 'archive'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
