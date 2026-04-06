<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $snapshotRetentionPeriodInDays
 * @property int|null $numberOfSnapshotsToRetain
 * @property bool|null $cleanExpiredFiles
 * @property int|null $runRateInHours
 */
class IcebergRetentionConfiguration extends Shape
{
    /**
     * @param array{
     *     snapshotRetentionPeriodInDays?: int|null,
     *     numberOfSnapshotsToRetain?: int|null,
     *     cleanExpiredFiles?: bool|null,
     *     runRateInHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
