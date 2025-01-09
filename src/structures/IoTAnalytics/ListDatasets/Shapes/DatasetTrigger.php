<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Schedule $schedule
 * @property TriggeringDataset $dataset
 */
class DatasetTrigger extends Shape
{
    /**
     * @param array{
     *     schedule?: Schedule,
     *     dataset?: TriggeringDataset
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
