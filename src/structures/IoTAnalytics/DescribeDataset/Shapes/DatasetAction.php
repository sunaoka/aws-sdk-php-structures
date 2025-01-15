<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionName
 * @property SqlQueryDatasetAction|null $queryAction
 * @property ContainerDatasetAction|null $containerAction
 */
class DatasetAction extends Shape
{
    /**
     * @param array{
     *     actionName?: string|null,
     *     queryAction?: SqlQueryDatasetAction|null,
     *     containerAction?: ContainerDatasetAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
