<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $newName
 * @property string|null $description
 */
class AutomatedReasoningPolicyUpdateVariableAnnotation extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     newName?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
