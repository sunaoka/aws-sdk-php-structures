<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppBusinessPublicKey;

trait GetWhatsAppBusinessPublicKeyTrait
{
    /**
     * @param GetWhatsAppBusinessPublicKeyRequest $args
     * @return GetWhatsAppBusinessPublicKeyResponse
     */
    public function getWhatsAppBusinessPublicKey(GetWhatsAppBusinessPublicKeyRequest $args)
    {
        $result = parent::getWhatsAppBusinessPublicKey($args->toArray());
        return new GetWhatsAppBusinessPublicKeyResponse($result->toArray());
    }
}
