<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property SqlQueryDatasetAction $queryAction
 * @property ContainerDatasetAction $containerAction
 */
class DatasetAction extends Shape
{
    /**
     * @param array{
     *     actionName?: string,
     *     queryAction?: SqlQueryDatasetAction,
     *     containerAction?: ContainerDatasetAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
