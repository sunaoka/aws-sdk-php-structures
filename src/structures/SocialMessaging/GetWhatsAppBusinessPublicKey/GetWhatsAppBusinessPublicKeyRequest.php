<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppBusinessPublicKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 */
class GetWhatsAppBusinessPublicKeyRequest extends Request
{
    /**
     * @param array{originationPhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
