<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $eventVariableNames
 * @property string|null $relativeImpact
 * @property float|null $logOddsImpact
 */
class AggregatedVariablesImpactExplanation extends Shape
{
    /**
     * @param array{
     *     eventVariableNames?: list<string>|null,
     *     relativeImpact?: string|null,
     *     logOddsImpact?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
