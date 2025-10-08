<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyBuildLogEntry> $entries
 */
class AutomatedReasoningPolicyBuildLog extends Shape
{
    /**
     * @param array{entries: list<AutomatedReasoningPolicyBuildLogEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
