<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $document
 * @property 'pdf'|'txt' $documentContentType
 * @property string $documentName
 * @property string|null $documentDescription
 */
class AutomatedReasoningPolicyBuildWorkflowDocument extends Shape
{
    /**
     * @param array{
     *     document: string|resource|\Psr\Http\Message\StreamInterface,
     *     documentContentType: 'pdf'|'txt',
     *     documentName: string,
     *     documentDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
