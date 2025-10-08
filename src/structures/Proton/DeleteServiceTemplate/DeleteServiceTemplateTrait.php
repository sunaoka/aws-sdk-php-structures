<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteServiceTemplate;

trait DeleteServiceTemplateTrait
{
    /**
     * @param DeleteServiceTemplateRequest $args
     * @return DeleteServiceTemplateResponse
     */
    public function deleteServiceTemplate(DeleteServiceTemplateRequest $args)
    {
        $result = parent::deleteServiceTemplate($args->toArray());
        return new DeleteServiceTemplateResponse($result->toArray());
    }
}
