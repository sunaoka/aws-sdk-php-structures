<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateKnowledgeBase;

trait CreateKnowledgeBaseTrait
{
    /**
     * @param CreateKnowledgeBaseRequest $args
     * @return CreateKnowledgeBaseResponse
     */
    public function createKnowledgeBase(CreateKnowledgeBaseRequest $args)
    {
        $result = parent::createKnowledgeBase($args->toArray());
        return new CreateKnowledgeBaseResponse($result->toArray());
    }
}
