<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailAutomatedReasoningFinding>|null $findings
 */
class GuardrailAutomatedReasoningPolicyAssessment extends Shape
{
    /**
     * @param array{findings?: list<GuardrailAutomatedReasoningFinding>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
