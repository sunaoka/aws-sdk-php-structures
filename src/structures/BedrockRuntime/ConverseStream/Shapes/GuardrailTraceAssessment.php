<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $modelOutput
 * @property array<string, GuardrailAssessment>|null $inputAssessment
 * @property array<string, list<GuardrailAssessment>>|null $outputAssessments
 * @property string|null $actionReason
 */
class GuardrailTraceAssessment extends Shape
{
    /**
     * @param array{
     *     modelOutput?: list<string>|null,
     *     inputAssessment?: array<string, GuardrailAssessment>|null,
     *     outputAssessments?: array<string, list<GuardrailAssessment>>|null,
     *     actionReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
