<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PostWhatsAppMessageMedia;

trait PostWhatsAppMessageMediaTrait
{
    /**
     * @param PostWhatsAppMessageMediaRequest $args
     * @return PostWhatsAppMessageMediaResponse
     */
    public function postWhatsAppMessageMedia(PostWhatsAppMessageMediaRequest $args)
    {
        $result = parent::postWhatsAppMessageMedia($args->toArray());
        return new PostWhatsAppMessageMediaResponse($result->toArray());
    }
}
