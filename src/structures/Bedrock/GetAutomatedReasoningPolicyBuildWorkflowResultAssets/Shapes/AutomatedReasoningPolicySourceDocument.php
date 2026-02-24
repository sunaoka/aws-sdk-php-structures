<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $document
 * @property 'pdf'|'txt' $documentContentType
 * @property string $documentName
 * @property string|null $documentDescription
 * @property string $documentHash
 */
class AutomatedReasoningPolicySourceDocument extends Shape
{
    /**
     * @param array{
     *     document: \Psr\Http\Message\StreamInterface,
     *     documentContentType: 'pdf'|'txt',
     *     documentName: string,
     *     documentDescription?: string|null,
     *     documentHash: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
