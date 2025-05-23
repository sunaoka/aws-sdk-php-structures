<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfDataFilesDeleted
 * @property int|null $NumberOfManifestFilesDeleted
 * @property int|null $NumberOfManifestListsDeleted
 * @property double|null $DpuHours
 * @property int|null $NumberOfDpus
 * @property double|null $JobDurationInHour
 */
class IcebergRetentionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfDataFilesDeleted?: int|null,
     *     NumberOfManifestFilesDeleted?: int|null,
     *     NumberOfManifestListsDeleted?: int|null,
     *     DpuHours?: double|null,
     *     NumberOfDpus?: int|null,
     *     JobDurationInHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
