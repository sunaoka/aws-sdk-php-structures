<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 * @property float|null $floatValue
 */
class RatingScaleItemValue extends Shape
{
    /**
     * @param array{
     *     stringValue?: string|null,
     *     floatValue?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
