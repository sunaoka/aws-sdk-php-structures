<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchKnowledgeBases;

trait SearchKnowledgeBasesTrait
{
    /**
     * @param SearchKnowledgeBasesRequest $args
     * @return SearchKnowledgeBasesResponse
     */
    public function searchKnowledgeBases(SearchKnowledgeBasesRequest $args)
    {
        $result = parent::searchKnowledgeBases($args->toArray());
        return new SearchKnowledgeBasesResponse($result->toArray());
    }
}
