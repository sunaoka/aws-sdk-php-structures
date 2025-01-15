<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreSnapshotFromRecycleBin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnapshotId
 * @property bool|null $DryRun
 */
class RestoreSnapshotFromRecycleBinRequest extends Request
{
    /**
     * @param array{
     *     SnapshotId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
