<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CheckIngestedDocumentAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $documentId
 * @property string $knowledgeBaseId
 * @property Shapes\UserContext $userContext
 */
class CheckIngestedDocumentAclRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     documentId: string,
     *     knowledgeBaseId: string,
     *     userContext: Shapes\UserContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
