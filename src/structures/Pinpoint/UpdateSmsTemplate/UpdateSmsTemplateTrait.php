<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSmsTemplate;

trait UpdateSmsTemplateTrait
{
    /**
     * @param UpdateSmsTemplateRequest $args
     * @return UpdateSmsTemplateResponse
     */
    public function updateSmsTemplate(UpdateSmsTemplateRequest $args)
    {
        $result = parent::updateSmsTemplate($args->toArray());
        return new UpdateSmsTemplateResponse($result->toArray());
    }
}
