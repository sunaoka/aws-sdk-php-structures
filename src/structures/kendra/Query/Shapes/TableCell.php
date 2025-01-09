<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property bool $TopAnswer
 * @property bool $Highlighted
 * @property bool $Header
 */
class TableCell extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     TopAnswer?: bool,
     *     Highlighted?: bool,
     *     Header?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
