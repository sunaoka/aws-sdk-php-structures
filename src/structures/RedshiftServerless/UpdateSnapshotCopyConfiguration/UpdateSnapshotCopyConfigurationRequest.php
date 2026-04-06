<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateSnapshotCopyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $snapshotCopyConfigurationId
 * @property int|null $snapshotRetentionPeriod
 */
class UpdateSnapshotCopyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     snapshotCopyConfigurationId: string,
     *     snapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
