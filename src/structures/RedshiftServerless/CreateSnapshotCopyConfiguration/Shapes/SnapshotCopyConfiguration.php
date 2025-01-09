<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateSnapshotCopyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationKmsKeyId
 * @property string $destinationRegion
 * @property string $namespaceName
 * @property string $snapshotCopyConfigurationArn
 * @property string $snapshotCopyConfigurationId
 * @property int $snapshotRetentionPeriod
 */
class SnapshotCopyConfiguration extends Shape
{
    /**
     * @param array{
     *     destinationKmsKeyId?: string,
     *     destinationRegion?: string,
     *     namespaceName?: string,
     *     snapshotCopyConfigurationArn?: string,
     *     snapshotCopyConfigurationId?: string,
     *     snapshotRetentionPeriod?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
