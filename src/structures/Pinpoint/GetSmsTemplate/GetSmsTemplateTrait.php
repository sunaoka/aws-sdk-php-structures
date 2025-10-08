<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsTemplate;

trait GetSmsTemplateTrait
{
    /**
     * @param GetSmsTemplateRequest $args
     * @return GetSmsTemplateResponse
     */
    public function getSmsTemplate(GetSmsTemplateRequest $args)
    {
        $result = parent::getSmsTemplate($args->toArray());
        return new GetSmsTemplateResponse($result->toArray());
    }
}
