<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBase;

trait DeleteKnowledgeBaseTrait
{
    /**
     * @param DeleteKnowledgeBaseRequest $args
     * @return DeleteKnowledgeBaseResponse
     */
    public function deleteKnowledgeBase(DeleteKnowledgeBaseRequest $args)
    {
        $result = parent::deleteKnowledgeBase($args->toArray());
        return new DeleteKnowledgeBaseResponse($result->toArray());
    }
}
