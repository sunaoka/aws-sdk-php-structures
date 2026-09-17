<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppCallEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property string $metaApiVersion
 * @property string|resource|\Psr\Http\Message\StreamInterface $callEvent
 */
class SendWhatsAppCallEventRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     metaApiVersion: string,
     *     callEvent: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
