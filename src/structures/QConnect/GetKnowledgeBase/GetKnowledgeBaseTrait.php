<?php

namespace Sunaoka\Aws\Structures\QConnect\GetKnowledgeBase;

trait GetKnowledgeBaseTrait
{
    /**
     * @param GetKnowledgeBaseRequest $args
     * @return GetKnowledgeBaseResponse
     */
    public function getKnowledgeBase(GetKnowledgeBaseRequest $args)
    {
        $result = parent::getKnowledgeBase($args->toArray());
        return new GetKnowledgeBaseResponse($result->toArray());
    }
}
