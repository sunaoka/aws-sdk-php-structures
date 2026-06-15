<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksPromptAttackResultEntry> $results
 */
class GuardrailChecksPromptAttackResult extends Shape
{
    /**
     * @param array{results: list<GuardrailChecksPromptAttackResultEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
