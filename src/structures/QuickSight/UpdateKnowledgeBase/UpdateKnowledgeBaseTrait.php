<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBase;

trait UpdateKnowledgeBaseTrait
{
    /**
     * @param UpdateKnowledgeBaseRequest $args
     * @return UpdateKnowledgeBaseResponse
     */
    public function updateKnowledgeBase(UpdateKnowledgeBaseRequest $args)
    {
        $result = parent::updateKnowledgeBase($args->toArray());
        return new UpdateKnowledgeBaseResponse($result->toArray());
    }
}
