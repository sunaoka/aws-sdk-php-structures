<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDeleteKnowledgeBase;

trait BatchDeleteKnowledgeBaseTrait
{
    /**
     * @param BatchDeleteKnowledgeBaseRequest $args
     * @return BatchDeleteKnowledgeBaseResponse
     */
    public function batchDeleteKnowledgeBase(BatchDeleteKnowledgeBaseRequest $args)
    {
        $result = parent::batchDeleteKnowledgeBase($args->toArray());
        return new BatchDeleteKnowledgeBaseResponse($result->toArray());
    }
}
