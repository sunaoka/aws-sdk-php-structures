<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentKnowledgeBase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $description
 * @property string $knowledgeBaseId
 * @property 'ENABLED'|'DISABLED'|null $knowledgeBaseState
 */
class AssociateAgentKnowledgeBaseRequest extends Request
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     description: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseState?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
