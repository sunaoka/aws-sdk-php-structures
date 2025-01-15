<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HumanLoopArn
 * @property list<string>|null $HumanLoopActivationReasons
 * @property string|null $HumanLoopActivationConditionsEvaluationResults
 */
class HumanLoopActivationOutput extends Shape
{
    /**
     * @param array{
     *     HumanLoopArn?: string|null,
     *     HumanLoopActivationReasons?: list<string>|null,
     *     HumanLoopActivationConditionsEvaluationResults?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
