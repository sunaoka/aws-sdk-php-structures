<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListKnowledgeBases;

trait ListKnowledgeBasesTrait
{
    /**
     * @param ListKnowledgeBasesRequest $args
     * @return ListKnowledgeBasesResponse
     */
    public function listKnowledgeBases(ListKnowledgeBasesRequest $args)
    {
        $result = parent::listKnowledgeBases($args->toArray());
        return new ListKnowledgeBasesResponse($result->toArray());
    }
}
