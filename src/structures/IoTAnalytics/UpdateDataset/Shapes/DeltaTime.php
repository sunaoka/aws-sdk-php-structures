<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $offsetSeconds
 * @property string $timeExpression
 */
class DeltaTime extends Shape
{
    /**
     * @param array{
     *     offsetSeconds: int,
     *     timeExpression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
