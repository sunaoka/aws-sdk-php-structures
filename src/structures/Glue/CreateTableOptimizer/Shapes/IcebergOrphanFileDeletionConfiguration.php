<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $orphanFileRetentionPeriodInDays
 * @property string $location
 */
class IcebergOrphanFileDeletionConfiguration extends Shape
{
    /**
     * @param array{
     *     orphanFileRetentionPeriodInDays?: int,
     *     location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
