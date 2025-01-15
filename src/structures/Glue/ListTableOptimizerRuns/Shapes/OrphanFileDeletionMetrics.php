<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergOrphanFileDeletionMetrics|null $IcebergMetrics
 */
class OrphanFileDeletionMetrics extends Shape
{
    /**
     * @param array{IcebergMetrics?: IcebergOrphanFileDeletionMetrics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
