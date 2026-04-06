<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppMessageTemplateMedia;

trait CreateWhatsAppMessageTemplateMediaTrait
{
    /**
     * @param CreateWhatsAppMessageTemplateMediaRequest $args
     * @return CreateWhatsAppMessageTemplateMediaResponse
     */
    public function createWhatsAppMessageTemplateMedia(CreateWhatsAppMessageTemplateMediaRequest $args)
    {
        $result = parent::createWhatsAppMessageTemplateMedia($args->toArray());
        return new CreateWhatsAppMessageTemplateMediaResponse($result->toArray());
    }
}
