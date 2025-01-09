<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property string $message
 * @property string $metaApiVersion
 */
class SendWhatsAppMessageRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     message: string,
     *     metaApiVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
