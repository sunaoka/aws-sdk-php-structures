<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JAILBREAK'|'PROMPT_INJECTION'|'PROMPT_LEAKAGE' $category
 * @property double $severityScore
 */
class GuardrailChecksPromptAttackResultEntry extends Shape
{
    /**
     * @param array{
     *     category: 'JAILBREAK'|'PROMPT_INJECTION'|'PROMPT_LEAKAGE',
     *     severityScore: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
