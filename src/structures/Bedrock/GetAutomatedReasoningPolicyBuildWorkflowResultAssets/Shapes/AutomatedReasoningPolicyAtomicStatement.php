<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $text
 * @property AutomatedReasoningPolicyStatementLocation $location
 */
class AutomatedReasoningPolicyAtomicStatement extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     text: string,
     *     location: AutomatedReasoningPolicyStatementLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
