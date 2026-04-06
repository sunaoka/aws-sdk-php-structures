<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $limitId
 * @property int<1, 2147483647> $count
 */
class AcquiredLimit extends Shape
{
    /**
     * @param array{
     *     limitId: string,
     *     count: int<1, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
