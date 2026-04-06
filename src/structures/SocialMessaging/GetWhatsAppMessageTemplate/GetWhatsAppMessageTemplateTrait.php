<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageTemplate;

trait GetWhatsAppMessageTemplateTrait
{
    /**
     * @param GetWhatsAppMessageTemplateRequest $args
     * @return GetWhatsAppMessageTemplateResponse
     */
    public function getWhatsAppMessageTemplate(GetWhatsAppMessageTemplateRequest $args)
    {
        $result = parent::getWhatsAppMessageTemplate($args->toArray());
        return new GetWhatsAppMessageTemplateResponse($result->toArray());
    }
}
