<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeleteWhatsAppMessageMedia;

trait DeleteWhatsAppMessageMediaTrait
{
    /**
     * @param DeleteWhatsAppMessageMediaRequest $args
     * @return DeleteWhatsAppMessageMediaResponse
     */
    public function deleteWhatsAppMessageMedia(DeleteWhatsAppMessageMediaRequest $args)
    {
        $result = parent::deleteWhatsAppMessageMedia($args->toArray());
        return new DeleteWhatsAppMessageMediaResponse($result->toArray());
    }
}
