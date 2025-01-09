<?php

namespace Sunaoka\Aws\Structures\Glue\ListTableOptimizerRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfDataFilesDeleted
 * @property int $NumberOfManifestFilesDeleted
 * @property int $NumberOfManifestListsDeleted
 * @property int $NumberOfDpus
 * @property double $JobDurationInHour
 */
class IcebergRetentionMetrics extends Shape
{
    /**
     * @param array{
     *     NumberOfDataFilesDeleted?: int,
     *     NumberOfManifestFilesDeleted?: int,
     *     NumberOfManifestListsDeleted?: int,
     *     NumberOfDpus?: int,
     *     JobDurationInHour?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
