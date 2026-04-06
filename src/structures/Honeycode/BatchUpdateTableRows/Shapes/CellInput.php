<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpdateTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fact
 * @property list<string>|null $facts
 */
class CellInput extends Shape
{
    /**
     * @param array{
     *     fact?: string|null,
     *     facts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
