<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERVENED'|'NONE' $action
 * @property list<GuardrailAssessment> $inputAssessments
 * @property list<GuardrailAssessment> $outputAssessments
 * @property string $traceId
 */
class GuardrailTrace extends Shape
{
    /**
     * @param array{
     *     action?: 'INTERVENED'|'NONE',
     *     inputAssessments?: list<GuardrailAssessment>,
     *     outputAssessments?: list<GuardrailAssessment>,
     *     traceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
