<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Schedule|null $schedule
 * @property TriggeringDataset|null $dataset
 */
class DatasetTrigger extends Shape
{
    /**
     * @param array{
     *     schedule?: Schedule|null,
     *     dataset?: TriggeringDataset|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
