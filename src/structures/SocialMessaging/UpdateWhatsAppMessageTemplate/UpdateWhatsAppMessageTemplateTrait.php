<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppMessageTemplate;

trait UpdateWhatsAppMessageTemplateTrait
{
    /**
     * @param UpdateWhatsAppMessageTemplateRequest $args
     * @return UpdateWhatsAppMessageTemplateResponse
     */
    public function updateWhatsAppMessageTemplate(UpdateWhatsAppMessageTemplateRequest $args)
    {
        $result = parent::updateWhatsAppMessageTemplate($args->toArray());
        return new UpdateWhatsAppMessageTemplateResponse($result->toArray());
    }
}
