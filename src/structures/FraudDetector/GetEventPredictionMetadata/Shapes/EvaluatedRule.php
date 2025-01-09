<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property string $ruleVersion
 * @property string $expression
 * @property string $expressionWithValues
 * @property list<string> $outcomes
 * @property bool $evaluated
 * @property bool $matched
 */
class EvaluatedRule extends Shape
{
    /**
     * @param array{
     *     ruleId?: string,
     *     ruleVersion?: string,
     *     expression?: string,
     *     expressionWithValues?: string,
     *     outcomes?: list<string>,
     *     evaluated?: bool,
     *     matched?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
