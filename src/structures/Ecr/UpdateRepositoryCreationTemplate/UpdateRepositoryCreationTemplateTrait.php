<?php

namespace Sunaoka\Aws\Structures\Ecr\UpdateRepositoryCreationTemplate;

trait UpdateRepositoryCreationTemplateTrait
{
    /**
     * @param UpdateRepositoryCreationTemplateRequest $args
     * @return UpdateRepositoryCreationTemplateResponse
     */
    public function updateRepositoryCreationTemplate(UpdateRepositoryCreationTemplateRequest $args)
    {
        $result = parent::updateRepositoryCreationTemplate($args->toArray());
        return new UpdateRepositoryCreationTemplateResponse($result->toArray());
    }
}
