<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $isServiceLimited
 * @property 'TERABYTES' $unit
 * @property int $value
 */
class ServiceLimit extends Shape
{
    /**
     * @param array{
     *     isServiceLimited?: bool,
     *     unit?: 'TERABYTES',
     *     value?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
