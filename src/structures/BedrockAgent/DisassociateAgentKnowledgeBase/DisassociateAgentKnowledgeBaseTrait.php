<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DisassociateAgentKnowledgeBase;

trait DisassociateAgentKnowledgeBaseTrait
{
    /**
     * @param DisassociateAgentKnowledgeBaseRequest $args
     * @return DisassociateAgentKnowledgeBaseResponse
     */
    public function disassociateAgentKnowledgeBase(DisassociateAgentKnowledgeBaseRequest $args)
    {
        $result = parent::disassociateAgentKnowledgeBase($args->toArray());
        return new DisassociateAgentKnowledgeBaseResponse($result->toArray());
    }
}
