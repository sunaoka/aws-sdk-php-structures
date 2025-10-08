<?php

namespace Sunaoka\Aws\Structures\Ses\CreateCustomVerificationEmailTemplate;

trait CreateCustomVerificationEmailTemplateTrait
{
    /**
     * @param CreateCustomVerificationEmailTemplateRequest $args
     * @return void
     */
    public function createCustomVerificationEmailTemplate(CreateCustomVerificationEmailTemplateRequest $args)
    {
        parent::createCustomVerificationEmailTemplate($args->toArray());
    }
}
