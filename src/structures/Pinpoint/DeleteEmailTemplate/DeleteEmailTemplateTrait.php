<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteEmailTemplate;

trait DeleteEmailTemplateTrait
{
    /**
     * @param DeleteEmailTemplateRequest $args
     * @return DeleteEmailTemplateResponse
     */
    public function deleteEmailTemplate(DeleteEmailTemplateRequest $args)
    {
        $result = parent::deleteEmailTemplate($args->toArray());
        return new DeleteEmailTemplateResponse($result->toArray());
    }
}
