<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteTaskTemplate;

trait DeleteTaskTemplateTrait
{
    /**
     * @param DeleteTaskTemplateRequest $args
     * @return DeleteTaskTemplateResponse
     */
    public function deleteTaskTemplate(DeleteTaskTemplateRequest $args)
    {
        $result = parent::deleteTaskTemplate($args->toArray());
        return new DeleteTaskTemplateResponse($result->toArray());
    }
}
