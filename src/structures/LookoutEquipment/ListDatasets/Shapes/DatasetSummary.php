<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS' $Status
 * @property \Aws\Api\DateTimeResult $CreatedAt
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     DatasetName?: string,
     *     DatasetArn?: string,
     *     Status?: 'CREATED'|'INGESTION_IN_PROGRESS'|'ACTIVE'|'IMPORT_IN_PROGRESS',
     *     CreatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
