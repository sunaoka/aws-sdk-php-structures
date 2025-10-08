<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateCustomVerificationEmailTemplate;

trait UpdateCustomVerificationEmailTemplateTrait
{
    /**
     * @param UpdateCustomVerificationEmailTemplateRequest $args
     * @return void
     */
    public function updateCustomVerificationEmailTemplate(UpdateCustomVerificationEmailTemplateRequest $args)
    {
        parent::updateCustomVerificationEmailTemplate($args->toArray());
    }
}
