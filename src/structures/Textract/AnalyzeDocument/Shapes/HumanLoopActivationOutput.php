<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HumanLoopArn
 * @property list<string> $HumanLoopActivationReasons
 * @property string $HumanLoopActivationConditionsEvaluationResults
 */
class HumanLoopActivationOutput extends Shape
{
    /**
     * @param array{
     *     HumanLoopArn?: string,
     *     HumanLoopActivationReasons?: list<string>,
     *     HumanLoopActivationConditionsEvaluationResults?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
