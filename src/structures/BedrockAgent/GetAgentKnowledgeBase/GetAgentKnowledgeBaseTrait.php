<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentKnowledgeBase;

trait GetAgentKnowledgeBaseTrait
{
    /**
     * @param GetAgentKnowledgeBaseRequest $args
     * @return GetAgentKnowledgeBaseResponse
     */
    public function getAgentKnowledgeBase(GetAgentKnowledgeBaseRequest $args)
    {
        $result = parent::getAgentKnowledgeBase($args->toArray());
        return new GetAgentKnowledgeBaseResponse($result->toArray());
    }
}
