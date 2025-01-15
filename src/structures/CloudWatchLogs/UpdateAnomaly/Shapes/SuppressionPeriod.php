<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $value
 * @property 'SECONDS'|'MINUTES'|'HOURS'|null $suppressionUnit
 */
class SuppressionPeriod extends Shape
{
    /**
     * @param array{
     *     value?: int|null,
     *     suppressionUnit?: 'SECONDS'|'MINUTES'|'HOURS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
