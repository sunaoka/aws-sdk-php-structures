<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datasetName
 * @property 'CREATING'|'ACTIVE'|'DELETING'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 * @property list<DatasetTrigger>|null $triggers
 * @property list<DatasetActionSummary>|null $actions
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     datasetName?: string|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     triggers?: list<DatasetTrigger>|null,
     *     actions?: list<DatasetActionSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
