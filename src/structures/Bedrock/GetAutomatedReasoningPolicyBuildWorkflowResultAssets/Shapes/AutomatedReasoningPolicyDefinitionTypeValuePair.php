<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typeName
 * @property string $valueName
 */
class AutomatedReasoningPolicyDefinitionTypeValuePair extends Shape
{
    /**
     * @param array{
     *     typeName: string,
     *     valueName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
