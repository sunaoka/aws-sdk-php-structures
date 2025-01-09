<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfOrphanFilesDeleted
 * @property int $NumberOfDpus
 * @property double $JobDurationInHour
 */
class IcebergOrphanFileDeletionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfOrphanFilesDeleted?: int,
     *     NumberOfDpus?: int,
     *     JobDurationInHour?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
