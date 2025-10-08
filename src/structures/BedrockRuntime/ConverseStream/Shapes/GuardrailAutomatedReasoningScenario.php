<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailAutomatedReasoningStatement>|null $statements
 */
class GuardrailAutomatedReasoningScenario extends Shape
{
    /**
     * @param array{statements?: list<GuardrailAutomatedReasoningStatement>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
