<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateCustomVerificationEmailTemplate;

trait CreateCustomVerificationEmailTemplateTrait
{
    /**
     * @param CreateCustomVerificationEmailTemplateRequest $args
     * @return CreateCustomVerificationEmailTemplateResponse
     */
    public function createCustomVerificationEmailTemplate(CreateCustomVerificationEmailTemplateRequest $args)
    {
        $result = parent::createCustomVerificationEmailTemplate($args->toArray());
        return new CreateCustomVerificationEmailTemplateResponse($result->toArray());
    }
}
