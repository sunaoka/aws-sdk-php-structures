<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetGeneratedTemplate;

trait GetGeneratedTemplateTrait
{
    /**
     * @param GetGeneratedTemplateRequest $args
     * @return GetGeneratedTemplateResponse
     */
    public function getGeneratedTemplate(GetGeneratedTemplateRequest $args)
    {
        $result = parent::getGeneratedTemplate($args->toArray());
        return new GetGeneratedTemplateResponse($result->toArray());
    }
}
