<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleId
 * @property string|null $ruleVersion
 * @property string|null $expression
 * @property string|null $expressionWithValues
 * @property list<string>|null $outcomes
 * @property bool|null $evaluated
 * @property bool|null $matched
 */
class EvaluatedRule extends Shape
{
    /**
     * @param array{
     *     ruleId?: string|null,
     *     ruleVersion?: string|null,
     *     expression?: string|null,
     *     expressionWithValues?: string|null,
     *     outcomes?: list<string>|null,
     *     evaluated?: bool|null,
     *     matched?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
