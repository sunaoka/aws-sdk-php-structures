<?php

namespace Sunaoka\Aws\Structures\SesV2\ListCustomVerificationEmailTemplates;

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
