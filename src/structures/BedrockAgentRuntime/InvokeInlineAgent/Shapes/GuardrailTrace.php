<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERVENED'|'NONE'|null $action
 * @property string|null $traceId
 * @property list<GuardrailAssessment>|null $inputAssessments
 * @property list<GuardrailAssessment>|null $outputAssessments
 * @property Metadata|null $metadata
 */
class GuardrailTrace extends Shape
{
    /**
     * @param array{
     *     action?: 'INTERVENED'|'NONE'|null,
     *     traceId?: string|null,
     *     inputAssessments?: list<GuardrailAssessment>|null,
     *     outputAssessments?: list<GuardrailAssessment>|null,
     *     metadata?: Metadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
