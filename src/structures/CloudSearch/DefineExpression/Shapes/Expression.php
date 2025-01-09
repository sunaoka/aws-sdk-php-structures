<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineExpression\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExpressionName
 * @property string $ExpressionValue
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     ExpressionName: string,
     *     ExpressionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
