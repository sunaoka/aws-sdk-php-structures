<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepositoryCreationTemplate;

trait DeleteRepositoryCreationTemplateTrait
{
    /**
     * @param DeleteRepositoryCreationTemplateRequest $args
     * @return DeleteRepositoryCreationTemplateResponse
     */
    public function deleteRepositoryCreationTemplate(DeleteRepositoryCreationTemplateRequest $args)
    {
        $result = parent::deleteRepositoryCreationTemplate($args->toArray());
        return new DeleteRepositoryCreationTemplateResponse($result->toArray());
    }
}
