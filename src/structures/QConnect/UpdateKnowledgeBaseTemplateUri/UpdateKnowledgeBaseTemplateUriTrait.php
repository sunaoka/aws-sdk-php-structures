<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateKnowledgeBaseTemplateUri;

trait UpdateKnowledgeBaseTemplateUriTrait
{
    /**
     * @param UpdateKnowledgeBaseTemplateUriRequest $args
     * @return UpdateKnowledgeBaseTemplateUriResponse
     */
    public function updateKnowledgeBaseTemplateUri(UpdateKnowledgeBaseTemplateUriRequest $args)
    {
        $result = parent::updateKnowledgeBaseTemplateUri($args->toArray());
        return new UpdateKnowledgeBaseTemplateUriResponse($result->toArray());
    }
}
