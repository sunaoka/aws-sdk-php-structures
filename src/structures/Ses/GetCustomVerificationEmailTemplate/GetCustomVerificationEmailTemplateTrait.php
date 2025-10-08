<?php

namespace Sunaoka\Aws\Structures\Ses\GetCustomVerificationEmailTemplate;

trait GetCustomVerificationEmailTemplateTrait
{
    /**
     * @param GetCustomVerificationEmailTemplateRequest $args
     * @return GetCustomVerificationEmailTemplateResponse
     */
    public function getCustomVerificationEmailTemplate(GetCustomVerificationEmailTemplateRequest $args)
    {
        $result = parent::getCustomVerificationEmailTemplate($args->toArray());
        return new GetCustomVerificationEmailTemplateResponse($result->toArray());
    }
}
