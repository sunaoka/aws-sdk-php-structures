<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventVariableName
 * @property string $relativeImpact
 * @property float $logOddsImpact
 */
class VariableImpactExplanation extends Shape
{
    /**
     * @param array{
     *     eventVariableName?: string,
     *     relativeImpact?: string,
     *     logOddsImpact?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
