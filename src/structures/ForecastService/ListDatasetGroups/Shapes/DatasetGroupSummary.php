<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetGroupArn
 * @property string $DatasetGroupName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class DatasetGroupSummary extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn?: string,
     *     DatasetGroupName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
