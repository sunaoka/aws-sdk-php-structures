<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $retentionPeriod
 * @property string $snapshotName
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     retentionPeriod?: int,
     *     snapshotName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
