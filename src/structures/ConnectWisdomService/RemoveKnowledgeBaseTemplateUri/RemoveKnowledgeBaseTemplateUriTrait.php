<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\RemoveKnowledgeBaseTemplateUri;

trait RemoveKnowledgeBaseTemplateUriTrait
{
    /**
     * @param RemoveKnowledgeBaseTemplateUriRequest $args
     * @return RemoveKnowledgeBaseTemplateUriResponse
     */
    public function removeKnowledgeBaseTemplateUri(RemoveKnowledgeBaseTemplateUriRequest $args)
    {
        $result = parent::removeKnowledgeBaseTemplateUri($args->toArray());
        return new RemoveKnowledgeBaseTemplateUriResponse($result->toArray());
    }
}
