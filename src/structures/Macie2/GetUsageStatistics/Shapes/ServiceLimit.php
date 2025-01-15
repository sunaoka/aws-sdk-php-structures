<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isServiceLimited
 * @property 'TERABYTES'|null $unit
 * @property int|null $value
 */
class ServiceLimit extends Shape
{
    /**
     * @param array{
     *     isServiceLimited?: bool|null,
     *     unit?: 'TERABYTES'|null,
     *     value?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
