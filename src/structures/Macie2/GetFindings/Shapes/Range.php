<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $end
 * @property int $start
 * @property int $startColumn
 */
class Range extends Shape
{
    /**
     * @param array{
     *     end?: int,
     *     start?: int,
     *     startColumn?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
