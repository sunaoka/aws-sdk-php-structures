<?php

namespace Sunaoka\Aws\Structures\DataPipeline\QueryObjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fieldName
 * @property Operator|null $operator
 */
class Selector extends Shape
{
    /**
     * @param array{
     *     fieldName?: string|null,
     *     operator?: Operator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
