<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timeInSeconds
 * @property string|null $offsetInNanos
 */
class AssetPropertyTimestamp extends Shape
{
    /**
     * @param array{
     *     timeInSeconds: string,
     *     offsetInNanos?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
