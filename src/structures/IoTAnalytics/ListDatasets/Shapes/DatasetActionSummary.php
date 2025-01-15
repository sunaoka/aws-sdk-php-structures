<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionName
 * @property 'QUERY'|'CONTAINER'|null $actionType
 */
class DatasetActionSummary extends Shape
{
    /**
     * @param array{
     *     actionName?: string|null,
     *     actionType?: 'QUERY'|'CONTAINER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
