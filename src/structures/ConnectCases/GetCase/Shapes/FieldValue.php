<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property FieldValueUnion $value
 */
class FieldValue extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     value: FieldValueUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
