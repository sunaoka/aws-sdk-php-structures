<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppMessageMedia;

trait GetWhatsAppMessageMediaTrait
{
    /**
     * @param GetWhatsAppMessageMediaRequest $args
     * @return GetWhatsAppMessageMediaResponse
     */
    public function getWhatsAppMessageMedia(GetWhatsAppMessageMediaRequest $args)
    {
        $result = parent::getWhatsAppMessageMedia($args->toArray());
        return new GetWhatsAppMessageMediaResponse($result->toArray());
    }
}
