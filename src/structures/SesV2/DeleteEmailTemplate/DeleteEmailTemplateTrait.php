<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteEmailTemplate;

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
