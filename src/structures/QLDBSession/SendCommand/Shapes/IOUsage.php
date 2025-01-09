<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadIOs
 * @property int $WriteIOs
 */
class IOUsage extends Shape
{
    /**
     * @param array{
     *     ReadIOs?: int,
     *     WriteIOs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
