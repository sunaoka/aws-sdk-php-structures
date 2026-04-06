<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateGeneratedTemplate;

trait UpdateGeneratedTemplateTrait
{
    /**
     * @param UpdateGeneratedTemplateRequest $args
     * @return UpdateGeneratedTemplateResponse
     */
    public function updateGeneratedTemplate(UpdateGeneratedTemplateRequest $args)
    {
        $result = parent::updateGeneratedTemplate($args->toArray());
        return new UpdateGeneratedTemplateResponse($result->toArray());
    }
}
