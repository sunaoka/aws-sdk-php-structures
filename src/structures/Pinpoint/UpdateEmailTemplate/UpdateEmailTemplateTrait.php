<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailTemplate;

trait UpdateEmailTemplateTrait
{
    /**
     * @param UpdateEmailTemplateRequest $args
     * @return UpdateEmailTemplateResponse
     */
    public function updateEmailTemplate(UpdateEmailTemplateRequest $args)
    {
        $result = parent::updateEmailTemplate($args->toArray());
        return new UpdateEmailTemplateResponse($result->toArray());
    }
}
