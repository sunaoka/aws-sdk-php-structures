<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $modelOutput
 * @property array<string, GuardrailAssessment>|null $inputAssessment
 * @property array<string, list<GuardrailAssessment>>|null $outputAssessments
 */
class GuardrailTraceAssessment extends Shape
{
    /**
     * @param array{
     *     modelOutput?: list<string>|null,
     *     inputAssessment?: array<string, GuardrailAssessment>|null,
     *     outputAssessments?: array<string, list<GuardrailAssessment>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
