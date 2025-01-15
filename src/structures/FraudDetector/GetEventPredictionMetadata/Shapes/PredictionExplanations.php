<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VariableImpactExplanation>|null $variableImpactExplanations
 * @property list<AggregatedVariablesImpactExplanation>|null $aggregatedVariablesImpactExplanations
 */
class PredictionExplanations extends Shape
{
    /**
     * @param array{
     *     variableImpactExplanations?: list<VariableImpactExplanation>|null,
     *     aggregatedVariablesImpactExplanations?: list<AggregatedVariablesImpactExplanation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
