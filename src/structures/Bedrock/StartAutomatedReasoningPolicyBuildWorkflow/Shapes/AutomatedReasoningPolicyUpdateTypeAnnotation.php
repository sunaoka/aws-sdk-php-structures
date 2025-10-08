<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $newName
 * @property string|null $description
 * @property list<AutomatedReasoningPolicyTypeValueAnnotation> $values
 */
class AutomatedReasoningPolicyUpdateTypeAnnotation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     newName?: string|null,
     *     description?: string|null,
     *     values: list<AutomatedReasoningPolicyTypeValueAnnotation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
