<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $end
 * @property int|null $start
 * @property int|null $startColumn
 */
class Range extends Shape
{
    /**
     * @param array{
     *     end?: int|null,
     *     start?: int|null,
     *     startColumn?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
