<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     DatasetName?: string|null,
     *     DatasetArn?: string|null,
     *     Status?: 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
