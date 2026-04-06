<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\AssociateAgentKnowledgeBase;

trait AssociateAgentKnowledgeBaseTrait
{
    /**
     * @param AssociateAgentKnowledgeBaseRequest $args
     * @return AssociateAgentKnowledgeBaseResponse
     */
    public function associateAgentKnowledgeBase(AssociateAgentKnowledgeBaseRequest $args)
    {
        $result = parent::associateAgentKnowledgeBase($args->toArray());
        return new AssociateAgentKnowledgeBaseResponse($result->toArray());
    }
}
