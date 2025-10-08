<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccount;

trait GetLinkedWhatsAppBusinessAccountTrait
{
    /**
     * @param GetLinkedWhatsAppBusinessAccountRequest $args
     * @return GetLinkedWhatsAppBusinessAccountResponse
     */
    public function getLinkedWhatsAppBusinessAccount(GetLinkedWhatsAppBusinessAccountRequest $args)
    {
        $result = parent::getLinkedWhatsAppBusinessAccount($args->toArray());
        return new GetLinkedWhatsAppBusinessAccountResponse($result->toArray());
    }
}
