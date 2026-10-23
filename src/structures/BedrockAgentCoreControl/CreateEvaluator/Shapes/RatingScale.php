<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NumericalScaleDefinition>|null $numerical
 * @property list<CategoricalScaleDefinition>|null $categorical
 * @property list<EvaluationDimension>|null $multiDimensional
 */
class RatingScale extends Shape
{
    /**
     * @param array{
     *     numerical?: list<NumericalScaleDefinition>|null,
     *     categorical?: list<CategoricalScaleDefinition>|null,
     *     multiDimensional?: list<EvaluationDimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
