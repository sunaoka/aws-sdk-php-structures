<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeleteWhatsAppMessageTemplate;

trait DeleteWhatsAppMessageTemplateTrait
{
    /**
     * @param DeleteWhatsAppMessageTemplateRequest $args
     * @return DeleteWhatsAppMessageTemplateResponse
     */
    public function deleteWhatsAppMessageTemplate(DeleteWhatsAppMessageTemplateRequest $args)
    {
        $result = parent::deleteWhatsAppMessageTemplate($args->toArray());
        return new DeleteWhatsAppMessageTemplateResponse($result->toArray());
    }
}
