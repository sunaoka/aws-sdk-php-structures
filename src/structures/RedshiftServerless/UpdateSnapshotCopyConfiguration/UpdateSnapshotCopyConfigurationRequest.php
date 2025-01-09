<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshotCopyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotCopyConfigurationId
 * @property int $snapshotRetentionPeriod
 */
class UpdateSnapshotCopyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     snapshotCopyConfigurationId: string,
     *     snapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
