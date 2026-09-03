<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PutWhatsAppBusinessPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property string|null $businessPublicKey
 * @property string|null $kmsKeyArn
 */
class PutWhatsAppBusinessPublicKeyRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     businessPublicKey?: string|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
