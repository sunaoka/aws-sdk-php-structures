<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $retentionPeriod
 * @property string $snapshotName
 */
class UpdateSnapshotRequest extends Request
{
    /**
     * @param array{
     *     retentionPeriod?: int|null,
     *     snapshotName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
