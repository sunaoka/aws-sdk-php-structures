<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $lineNumber
 * @property string|null $lineText
 */
class AutomatedReasoningPolicyAnnotatedLine extends Shape
{
    /**
     * @param array{
     *     lineNumber?: int|null,
     *     lineText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
