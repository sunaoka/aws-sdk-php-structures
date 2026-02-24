<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $lines
 */
class AutomatedReasoningPolicyStatementLocation extends Shape
{
    /**
     * @param array{lines: list<int>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
