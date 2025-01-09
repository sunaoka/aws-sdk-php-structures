<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventVariableNames
 * @property string $relativeImpact
 * @property float $logOddsImpact
 */
class AggregatedVariablesImpactExplanation extends Shape
{
    /**
     * @param array{
     *     eventVariableNames?: list<string>,
     *     relativeImpact?: string,
     *     logOddsImpact?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
