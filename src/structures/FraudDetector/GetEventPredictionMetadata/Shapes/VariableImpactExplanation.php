<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventVariableName
 * @property string|null $relativeImpact
 * @property float|null $logOddsImpact
 */
class VariableImpactExplanation extends Shape
{
    /**
     * @param array{
     *     eventVariableName?: string|null,
     *     relativeImpact?: string|null,
     *     logOddsImpact?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
