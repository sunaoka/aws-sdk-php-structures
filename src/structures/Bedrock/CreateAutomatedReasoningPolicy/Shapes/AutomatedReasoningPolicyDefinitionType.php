<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<AutomatedReasoningPolicyDefinitionTypeValue> $values
 */
class AutomatedReasoningPolicyDefinitionType extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     values: list<AutomatedReasoningPolicyDefinitionTypeValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
