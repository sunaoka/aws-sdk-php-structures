<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property string|null $DatasetName
 * @property string|null $DatasetArn
 * @property IngestionInputConfiguration|null $IngestionInputConfiguration
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 */
class DataIngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     DatasetName?: string|null,
     *     DatasetArn?: string|null,
     *     IngestionInputConfiguration?: IngestionInputConfiguration|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
