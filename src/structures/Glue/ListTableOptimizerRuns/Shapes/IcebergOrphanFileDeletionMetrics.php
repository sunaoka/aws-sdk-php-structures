<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfOrphanFilesDeleted
 * @property int|null $NumberOfDpus
 * @property double|null $JobDurationInHour
 */
class IcebergOrphanFileDeletionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfOrphanFilesDeleted?: int|null,
     *     NumberOfDpus?: int|null,
     *     JobDurationInHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
