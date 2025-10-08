<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property list<AutomatedReasoningPolicyDefinitionTypeValue> $values
 */
class AutomatedReasoningPolicyAddTypeAnnotation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description: string,
     *     values: list<AutomatedReasoningPolicyDefinitionTypeValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
