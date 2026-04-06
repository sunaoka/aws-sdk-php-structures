<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentId
 * @property string $statementId
 */
class AutomatedReasoningPolicyStatementReference extends Shape
{
    /**
     * @param array{
     *     documentId: string,
     *     statementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
