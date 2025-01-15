<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property bool|null $TopAnswer
 * @property bool|null $Highlighted
 * @property bool|null $Header
 */
class TableCell extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     TopAnswer?: bool|null,
     *     Highlighted?: bool|null,
     *     Header?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
