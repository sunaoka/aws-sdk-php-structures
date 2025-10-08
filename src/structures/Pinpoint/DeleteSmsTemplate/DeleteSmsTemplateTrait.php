<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteSmsTemplate;

trait DeleteSmsTemplateTrait
{
    /**
     * @param DeleteSmsTemplateRequest $args
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate(DeleteSmsTemplateRequest $args)
    {
        $result = parent::deleteSmsTemplate($args->toArray());
        return new DeleteSmsTemplateResponse($result->toArray());
    }
}
