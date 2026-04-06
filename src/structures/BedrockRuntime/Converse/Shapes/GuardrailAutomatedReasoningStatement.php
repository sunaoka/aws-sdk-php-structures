<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logic
 * @property string|null $naturalLanguage
 */
class GuardrailAutomatedReasoningStatement extends Shape
{
    /**
     * @param array{
     *     logic?: string|null,
     *     naturalLanguage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
