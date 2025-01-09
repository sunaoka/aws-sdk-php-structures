<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $value
 * @property 'SECONDS'|'MINUTES'|'HOURS' $suppressionUnit
 */
class SuppressionPeriod extends Shape
{
    /**
     * @param array{
     *     value?: int,
     *     suppressionUnit?: 'SECONDS'|'MINUTES'|'HOURS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
