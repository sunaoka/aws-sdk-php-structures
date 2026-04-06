<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERVENED'|'NONE'|null $action
 * @property list<GuardrailAssessment>|null $inputAssessments
 * @property Metadata|null $metadata
 * @property list<GuardrailAssessment>|null $outputAssessments
 * @property string|null $traceId
 */
class GuardrailTrace extends Shape
{
    /**
     * @param array{
     *     action?: 'INTERVENED'|'NONE'|null,
     *     inputAssessments?: list<GuardrailAssessment>|null,
     *     metadata?: Metadata|null,
     *     outputAssessments?: list<GuardrailAssessment>|null,
     *     traceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
