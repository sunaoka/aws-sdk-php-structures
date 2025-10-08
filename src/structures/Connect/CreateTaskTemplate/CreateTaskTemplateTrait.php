<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate;

trait CreateTaskTemplateTrait
{
    /**
     * @param CreateTaskTemplateRequest $args
     * @return CreateTaskTemplateResponse
     */
    public function createTaskTemplate(CreateTaskTemplateRequest $args)
    {
        $result = parent::createTaskTemplate($args->toArray());
        return new CreateTaskTemplateResponse($result->toArray());
    }
}
