<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshotCopyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $destinationKmsKeyId
 * @property string|null $destinationRegion
 * @property string|null $namespaceName
 * @property string|null $snapshotCopyConfigurationArn
 * @property string|null $snapshotCopyConfigurationId
 * @property int|null $snapshotRetentionPeriod
 */
class SnapshotCopyConfiguration extends Shape
{
    /**
     * @param array{
     *     destinationKmsKeyId?: string|null,
     *     destinationRegion?: string|null,
     *     namespaceName?: string|null,
     *     snapshotCopyConfigurationArn?: string|null,
     *     snapshotCopyConfigurationId?: string|null,
     *     snapshotRetentionPeriod?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
