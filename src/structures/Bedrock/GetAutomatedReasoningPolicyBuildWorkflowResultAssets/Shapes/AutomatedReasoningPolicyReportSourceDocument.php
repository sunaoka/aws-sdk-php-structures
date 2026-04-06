<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $documentName
 * @property string $documentHash
 * @property string $documentId
 * @property list<AutomatedReasoningPolicyAtomicStatement> $atomicStatements
 * @property list<AutomatedReasoningPolicyAnnotatedChunk> $documentContent
 */
class AutomatedReasoningPolicyReportSourceDocument extends Shape
{
    /**
     * @param array{
     *     documentName: string,
     *     documentHash: string,
     *     documentId: string,
     *     atomicStatements: list<AutomatedReasoningPolicyAtomicStatement>,
     *     documentContent: list<AutomatedReasoningPolicyAnnotatedChunk>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
