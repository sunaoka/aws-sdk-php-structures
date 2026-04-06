<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $instructions
 * @property list<RatingScaleItem>|null $ratingScale
 */
class CustomMetricDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     instructions: string,
     *     ratingScale?: list<RatingScaleItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
