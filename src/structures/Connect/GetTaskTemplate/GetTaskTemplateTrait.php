<?php

namespace Sunaoka\Aws\Structures\Connect\GetTaskTemplate;

trait GetTaskTemplateTrait
{
    /**
     * @param GetTaskTemplateRequest $args
     * @return GetTaskTemplateResponse
     */
    public function getTaskTemplate(GetTaskTemplateRequest $args)
    {
        $result = parent::getTaskTemplate($args->toArray());
        return new GetTaskTemplateResponse($result->toArray());
    }
}
