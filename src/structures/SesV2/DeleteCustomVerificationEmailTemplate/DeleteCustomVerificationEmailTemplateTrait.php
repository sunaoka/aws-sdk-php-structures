<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteCustomVerificationEmailTemplate;

trait DeleteCustomVerificationEmailTemplateTrait
{
    /**
     * @param DeleteCustomVerificationEmailTemplateRequest $args
     * @return DeleteCustomVerificationEmailTemplateResponse
     */
    public function deleteCustomVerificationEmailTemplate(DeleteCustomVerificationEmailTemplateRequest $args)
    {
        $result = parent::deleteCustomVerificationEmailTemplate($args->toArray());
        return new DeleteCustomVerificationEmailTemplateResponse($result->toArray());
    }
}
