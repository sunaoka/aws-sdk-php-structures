<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $orphanFileRetentionPeriodInDays
 * @property string|null $location
 */
class IcebergOrphanFileDeletionConfiguration extends Shape
{
    /**
     * @param array{
     *     orphanFileRetentionPeriodInDays?: int|null,
     *     location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
