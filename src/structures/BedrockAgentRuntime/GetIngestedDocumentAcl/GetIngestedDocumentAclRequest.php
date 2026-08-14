<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetIngestedDocumentAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $documentId
 * @property string $knowledgeBaseId
 */
class GetIngestedDocumentAclRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     documentId: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
