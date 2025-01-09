<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotFromRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property bool $DryRun
 */
class RestoreSnapshotFromRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
