<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property 'INFO'|'WARNING'|'ERROR' $messageType
 */
class AutomatedReasoningPolicyBuildStepMessage extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     messageType: 'INFO'|'WARNING'|'ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
