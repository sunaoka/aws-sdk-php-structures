<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $snapshotRetentionPeriodInDays
 * @property int $numberOfSnapshotsToRetain
 * @property bool $cleanExpiredFiles
 */
class IcebergRetentionConfiguration extends Shape
{
    /**
     * @param array{
     *     snapshotRetentionPeriodInDays?: int,
     *     numberOfSnapshotsToRetain?: int,
     *     cleanExpiredFiles?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
