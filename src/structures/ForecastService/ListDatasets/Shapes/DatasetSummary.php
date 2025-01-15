<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetArn
 * @property string|null $DatasetName
 * @property 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA'|null $DatasetType
 * @property 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS'|null $Domain
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     DatasetArn?: string|null,
     *     DatasetName?: string|null,
     *     DatasetType?: 'TARGET_TIME_SERIES'|'RELATED_TIME_SERIES'|'ITEM_METADATA'|null,
     *     Domain?: 'RETAIL'|'CUSTOM'|'INVENTORY_PLANNING'|'EC2_CAPACITY'|'WORK_FORCE'|'WEB_TRAFFIC'|'METRICS'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
