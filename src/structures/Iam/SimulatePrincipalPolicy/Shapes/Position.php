<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Line
 * @property int $Column
 */
class Position extends Shape
{
    /**
     * @param array{
     *     Line?: int,
     *     Column?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
