<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateEmailTemplate;

trait CreateEmailTemplateTrait
{
    /**
     * @param CreateEmailTemplateRequest $args
     * @return CreateEmailTemplateResponse
     */
    public function createEmailTemplate(CreateEmailTemplateRequest $args)
    {
        $result = parent::createEmailTemplate($args->toArray());
        return new CreateEmailTemplateResponse($result->toArray());
    }
}
