<?php

namespace Sunaoka\Aws\Structures\Ses\ListCustomVerificationEmailTemplates;

trait ListCustomVerificationEmailTemplatesTrait
{
    /**
     * @param ListCustomVerificationEmailTemplatesRequest $args
     * @return ListCustomVerificationEmailTemplatesResponse
     */
    public function listCustomVerificationEmailTemplates(ListCustomVerificationEmailTemplatesRequest $args)
    {
        $result = parent::listCustomVerificationEmailTemplates($args->toArray());
        return new ListCustomVerificationEmailTemplatesResponse($result->toArray());
    }
}
