<?php

namespace Sunaoka\Aws\Structures\SesV2\GetCustomVerificationEmailTemplate;

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
