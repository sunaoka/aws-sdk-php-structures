<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PutWhatsAppBusinessPublicKey;

trait PutWhatsAppBusinessPublicKeyTrait
{
    /**
     * @param PutWhatsAppBusinessPublicKeyRequest $args
     * @return PutWhatsAppBusinessPublicKeyResponse
     */
    public function putWhatsAppBusinessPublicKey(PutWhatsAppBusinessPublicKeyRequest $args)
    {
        $result = parent::putWhatsAppBusinessPublicKey($args->toArray());
        return new PutWhatsAppBusinessPublicKeyResponse($result->toArray());
    }
}
