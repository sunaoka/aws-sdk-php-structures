<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $description
 * @property string $knowledgeBaseId
 * @property 'ENABLED'|'DISABLED' $knowledgeBaseState
 */
class UpdateAgentKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     description?: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseState?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
