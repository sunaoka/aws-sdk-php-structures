<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteTemplate;

trait DeleteTemplateTrait
{
    /**
     * @param DeleteTemplateRequest $args
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate(DeleteTemplateRequest $args)
    {
        $result = parent::deleteTemplate($args->toArray());
        return new DeleteTemplateResponse($result->toArray());
    }
}
