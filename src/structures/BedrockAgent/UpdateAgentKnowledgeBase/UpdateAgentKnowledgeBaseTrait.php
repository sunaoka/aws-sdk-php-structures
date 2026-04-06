<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentKnowledgeBase;

trait UpdateAgentKnowledgeBaseTrait
{
    /**
     * @param UpdateAgentKnowledgeBaseRequest $args
     * @return UpdateAgentKnowledgeBaseResponse
     */
    public function updateAgentKnowledgeBase(UpdateAgentKnowledgeBaseRequest $args)
    {
        $result = parent::updateAgentKnowledgeBase($args->toArray());
        return new UpdateAgentKnowledgeBaseResponse($result->toArray());
    }
}
