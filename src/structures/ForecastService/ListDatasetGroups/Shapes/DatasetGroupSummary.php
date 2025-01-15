<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListDatasetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatasetGroupArn
 * @property string|null $DatasetGroupName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class DatasetGroupSummary extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn?: string|null,
     *     DatasetGroupName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
