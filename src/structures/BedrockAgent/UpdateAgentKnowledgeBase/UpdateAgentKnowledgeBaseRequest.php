<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $knowledgeBaseId
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $knowledgeBaseState
 */
class UpdateAgentKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     knowledgeBaseId: string,
     *     description?: string|null,
     *     knowledgeBaseState?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
