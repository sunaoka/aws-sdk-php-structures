<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeGuardrailChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailChecksPromptAttackCategoryConfig> $categories
 */
class GuardrailChecksPromptAttackConfig extends Shape
{
    /**
     * @param array{categories: list<GuardrailChecksPromptAttackCategoryConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
