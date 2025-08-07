<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $orphanFileRetentionPeriodInDays
 * @property string|null $location
 * @property int|null $runRateInHours
 */
class IcebergOrphanFileDeletionConfiguration extends Shape
{
    /**
     * @param array{
     *     orphanFileRetentionPeriodInDays?: int|null,
     *     location?: string|null,
     *     runRateInHours?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
