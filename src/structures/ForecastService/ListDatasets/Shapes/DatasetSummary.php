<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetArn
 * @property string $DatasetName
 * @property 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA' $DatasetType
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS' $Domain
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     DatasetArn?: string,
     *     DatasetName?: string,
     *     DatasetType?: 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA',
     *     Domain?: 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
