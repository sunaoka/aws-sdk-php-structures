<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property list<string> $outcomes
 */
class RuleResult extends Shape
{
    /**
     * @param array{
     *     ruleId?: string,
     *     outcomes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
