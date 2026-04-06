<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteTemplate;

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
