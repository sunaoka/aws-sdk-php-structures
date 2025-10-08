<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentKnowledgeBases;

trait ListAgentKnowledgeBasesTrait
{
    /**
     * @param ListAgentKnowledgeBasesRequest $args
     * @return ListAgentKnowledgeBasesResponse
     */
    public function listAgentKnowledgeBases(ListAgentKnowledgeBasesRequest $args)
    {
        $result = parent::listAgentKnowledgeBases($args->toArray());
        return new ListAgentKnowledgeBasesResponse($result->toArray());
    }
}
