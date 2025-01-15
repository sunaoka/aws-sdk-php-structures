<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IsEmpty
 * @property bool|null $IsNullString
 * @property bool|null $IsNegOne
 */
class NullCheckBoxList extends Shape
{
    /**
     * @param array{
     *     IsEmpty?: bool|null,
     *     IsNullString?: bool|null,
     *     IsNegOne?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
