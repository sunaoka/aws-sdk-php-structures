<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReadIOs
 * @property int|null $WriteIOs
 */
class IOUsage extends Shape
{
    /**
     * @param array{
     *     ReadIOs?: int|null,
     *     WriteIOs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
