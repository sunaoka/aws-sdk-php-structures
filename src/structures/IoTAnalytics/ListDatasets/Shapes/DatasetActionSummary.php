<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property 'QUERY'|'CONTAINER' $actionType
 */
class DatasetActionSummary extends Shape
{
    /**
     * @param array{
     *     actionName?: string,
     *     actionType?: 'QUERY'|'CONTAINER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
