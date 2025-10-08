<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEmailTemplate;

trait GetEmailTemplateTrait
{
    /**
     * @param GetEmailTemplateRequest $args
     * @return GetEmailTemplateResponse
     */
    public function getEmailTemplate(GetEmailTemplateRequest $args)
    {
        $result = parent::getEmailTemplate($args->toArray());
        return new GetEmailTemplateResponse($result->toArray());
    }
}
