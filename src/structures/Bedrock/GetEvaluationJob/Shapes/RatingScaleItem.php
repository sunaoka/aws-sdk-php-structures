<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $definition
 * @property RatingScaleItemValue $value
 */
class RatingScaleItem extends Shape
{
    /**
     * @param array{
     *     definition: string,
     *     value: RatingScaleItemValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
