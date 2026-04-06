<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplate;

trait CreateWhatsAppMessageTemplateTrait
{
    /**
     * @param CreateWhatsAppMessageTemplateRequest $args
     * @return CreateWhatsAppMessageTemplateResponse
     */
    public function createWhatsAppMessageTemplate(CreateWhatsAppMessageTemplateRequest $args)
    {
        $result = parent::createWhatsAppMessageTemplate($args->toArray());
        return new CreateWhatsAppMessageTemplateResponse($result->toArray());
    }
}
