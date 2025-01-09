<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $knowledgeBaseId
 */
class GetAgentKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
