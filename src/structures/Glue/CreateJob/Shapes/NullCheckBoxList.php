<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IsEmpty
 * @property bool $IsNullString
 * @property bool $IsNegOne
 */
class NullCheckBoxList extends Shape
{
    /**
     * @param array{
     *     IsEmpty?: bool,
     *     IsNullString?: bool,
     *     IsNegOne?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
