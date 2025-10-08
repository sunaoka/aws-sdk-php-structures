<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 */
class GuardrailAutomatedReasoningInputTextReference extends Shape
{
    /**
     * @param array{text?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
