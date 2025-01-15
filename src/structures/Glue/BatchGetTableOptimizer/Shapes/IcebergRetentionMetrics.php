<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfDataFilesDeleted
 * @property int|null $NumberOfManifestFilesDeleted
 * @property int|null $NumberOfManifestListsDeleted
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
     *     NumberOfDpus?: int|null,
     *     JobDurationInHour?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
