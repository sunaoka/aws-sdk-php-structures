<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetDocumentContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $documentId
 * @property string $knowledgeBaseId
 * @property 'RAW'|'EXTRACTED'|null $outputFormat
 * @property Shapes\UserContext|null $userContext
 */
class GetDocumentContentRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     documentId: string,
     *     knowledgeBaseId: string,
     *     outputFormat?: 'RAW'|'EXTRACTED'|null,
     *     userContext?: Shapes\UserContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
