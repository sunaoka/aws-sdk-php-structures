<?php

namespace Sunaoka\Aws\Structures\Ecr\CreateRepositoryCreationTemplate;

trait CreateRepositoryCreationTemplateTrait
{
    /**
     * @param CreateRepositoryCreationTemplateRequest $args
     * @return CreateRepositoryCreationTemplateResponse
     */
    public function createRepositoryCreationTemplate(CreateRepositoryCreationTemplateRequest $args)
    {
        $result = parent::createRepositoryCreationTemplate($args->toArray());
        return new CreateRepositoryCreationTemplateResponse($result->toArray());
    }
}
