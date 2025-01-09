<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetName
 * @property 'CREATING'|'ACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 * @property list<DatasetTrigger> $triggers
 * @property list<DatasetActionSummary> $actions
 */
class DatasetSummary extends Shape
{
    /**
     * @param array{
     *     datasetName?: string,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult,
     *     triggers?: list<DatasetTrigger>,
     *     actions?: list<DatasetActionSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
