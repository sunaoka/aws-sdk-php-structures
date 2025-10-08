<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningCheckTranslation>|null $translations
 */
class AutomatedReasoningCheckTranslationOption extends Shape
{
    /**
     * @param array{translations?: list<AutomatedReasoningCheckTranslation>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
