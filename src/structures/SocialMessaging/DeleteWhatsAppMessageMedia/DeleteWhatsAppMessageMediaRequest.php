<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeleteWhatsAppMessageMedia;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mediaId
 * @property string $originationPhoneNumberId
 */
class DeleteWhatsAppMessageMediaRequest extends Request
{
    /**
     * @param array{
     *     mediaId: string,
     *     originationPhoneNumberId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
