<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateGeneratedTemplate;

trait CreateGeneratedTemplateTrait
{
    /**
     * @param CreateGeneratedTemplateRequest $args
     * @return CreateGeneratedTemplateResponse
     */
    public function createGeneratedTemplate(CreateGeneratedTemplateRequest $args)
    {
        $result = parent::createGeneratedTemplate($args->toArray());
        return new CreateGeneratedTemplateResponse($result->toArray());
    }
}
