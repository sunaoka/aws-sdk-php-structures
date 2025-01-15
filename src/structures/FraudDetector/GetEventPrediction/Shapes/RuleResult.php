<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleId
 * @property list<string>|null $outcomes
 */
class RuleResult extends Shape
{
    /**
     * @param array{
     *     ruleId?: string|null,
     *     outcomes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
