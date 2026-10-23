<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionName
 * @property string $dimensionInstruction
 * @property DimensionRatingScale $dimensionRatingScale
 */
class EvaluationDimension extends Shape
{
    /**
     * @param array{
     *     dimensionName: string,
     *     dimensionInstruction: string,
     *     dimensionRatingScale: DimensionRatingScale
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
