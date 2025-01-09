<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property string $DatasetName
 * @property string $DatasetArn
 * @property IngestionInputConfiguration $IngestionInputConfiguration
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 */
class DataIngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     DatasetName?: string,
     *     DatasetArn?: string,
     *     IngestionInputConfiguration?: IngestionInputConfiguration,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
