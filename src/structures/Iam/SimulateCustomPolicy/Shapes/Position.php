<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Line
 * @property int|null $Column
 */
class Position extends Shape
{
    /**
     * @param array{
     *     Line?: int|null,
     *     Column?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
