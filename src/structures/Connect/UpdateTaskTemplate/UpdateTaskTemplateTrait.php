<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate;

trait UpdateTaskTemplateTrait
{
    /**
     * @param UpdateTaskTemplateRequest $args
     * @return UpdateTaskTemplateResponse
     */
    public function updateTaskTemplate(UpdateTaskTemplateRequest $args)
    {
        $result = parent::updateTaskTemplate($args->toArray());
        return new UpdateTaskTemplateResponse($result->toArray());
    }
}
