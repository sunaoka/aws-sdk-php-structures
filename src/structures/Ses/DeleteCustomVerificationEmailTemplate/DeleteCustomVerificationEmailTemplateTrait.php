<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteCustomVerificationEmailTemplate;

trait DeleteCustomVerificationEmailTemplateTrait
{
    /**
     * @param DeleteCustomVerificationEmailTemplateRequest $args
     * @return void
     */
    public function deleteCustomVerificationEmailTemplate(DeleteCustomVerificationEmailTemplateRequest $args)
    {
        parent::deleteCustomVerificationEmailTemplate($args->toArray());
    }
}
