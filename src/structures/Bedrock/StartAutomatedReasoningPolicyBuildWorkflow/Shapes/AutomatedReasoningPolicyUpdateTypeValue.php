<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string|null $newValue
 * @property string|null $description
 */
class AutomatedReasoningPolicyUpdateTypeValue extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     newValue?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
