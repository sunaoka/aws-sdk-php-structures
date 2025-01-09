<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergOrphanFileDeletionMetrics $IcebergMetrics
 */
class OrphanFileDeletionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergOrphanFileDeletionMetrics} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
