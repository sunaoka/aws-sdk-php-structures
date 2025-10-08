<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailAutomatedReasoningTranslation>|null $translations
 */
class GuardrailAutomatedReasoningTranslationOption extends Shape
{
    /**
     * @param array{translations?: list<GuardrailAutomatedReasoningTranslation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
