<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VariableImpactExplanation> $variableImpactExplanations
 * @property list<AggregatedVariablesImpactExplanation> $aggregatedVariablesImpactExplanations
 */
class PredictionExplanations extends Shape
{
    /**
     * @param array{
     *     variableImpactExplanations?: list<VariableImpactExplanation>,
     *     aggregatedVariablesImpactExplanations?: list<AggregatedVariablesImpactExplanation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
