<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $modelOutput
 * @property array<string, GuardrailAssessment> $inputAssessment
 * @property array<string, list<GuardrailAssessment>> $outputAssessments
 */
class GuardrailTraceAssessment extends Shape
{
    /**
     * @param array{
     *     modelOutput?: list<string>,
     *     inputAssessment?: array<string, GuardrailAssessment>,
     *     outputAssessments?: array<string, list<GuardrailAssessment>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
