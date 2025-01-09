<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property FieldValueUnion $Value
 */
class FieldValue extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Value: FieldValueUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
