<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccountPhoneNumber;

trait GetLinkedWhatsAppBusinessAccountPhoneNumberTrait
{
    /**
     * @param GetLinkedWhatsAppBusinessAccountPhoneNumberRequest $args
     * @return GetLinkedWhatsAppBusinessAccountPhoneNumberResponse
     */
    public function getLinkedWhatsAppBusinessAccountPhoneNumber(
        GetLinkedWhatsAppBusinessAccountPhoneNumberRequest $args,
    ) {
        $result = parent::getLinkedWhatsAppBusinessAccountPhoneNumber($args->toArray());
        return new GetLinkedWhatsAppBusinessAccountPhoneNumberResponse($result->toArray());
    }
}
