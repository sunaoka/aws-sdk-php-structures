<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fieldName
 * @property Operator $operator
 */
class Selector extends Shape
{
    /**
     * @param array{
     *     fieldName?: string,
     *     operator?: Operator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
