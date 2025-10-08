<?php

namespace Sunaoka\Aws\Structures\Proton\DeleteEnvironmentTemplate;

trait DeleteEnvironmentTemplateTrait
{
    /**
     * @param DeleteEnvironmentTemplateRequest $args
     * @return DeleteEnvironmentTemplateResponse
     */
    public function deleteEnvironmentTemplate(DeleteEnvironmentTemplateRequest $args)
    {
        $result = parent::deleteEnvironmentTemplate($args->toArray());
        return new DeleteEnvironmentTemplateResponse($result->toArray());
    }
}
