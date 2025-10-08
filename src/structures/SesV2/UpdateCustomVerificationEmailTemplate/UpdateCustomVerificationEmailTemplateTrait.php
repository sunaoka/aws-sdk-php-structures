<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateCustomVerificationEmailTemplate;

trait UpdateCustomVerificationEmailTemplateTrait
{
    /**
     * @param UpdateCustomVerificationEmailTemplateRequest $args
     * @return UpdateCustomVerificationEmailTemplateResponse
     */
    public function updateCustomVerificationEmailTemplate(UpdateCustomVerificationEmailTemplateRequest $args)
    {
        $result = parent::updateCustomVerificationEmailTemplate($args->toArray());
        return new UpdateCustomVerificationEmailTemplateResponse($result->toArray());
    }
}
