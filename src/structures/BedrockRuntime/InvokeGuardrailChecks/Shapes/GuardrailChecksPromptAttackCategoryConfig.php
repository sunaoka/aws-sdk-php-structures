<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAILBREAK'|'PROMPT_INJECTION'|'PROMPT_LEAKAGE' $category
 */
class GuardrailChecksPromptAttackCategoryConfig extends Shape
{
    /**
     * @param array{category: 'JAILBREAK'|'PROMPT_INJECTION'|'PROMPT_LEAKAGE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
