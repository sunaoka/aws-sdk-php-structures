<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateLinkedWhatsAppBusinessAccountPhoneNumber;

trait UpdateLinkedWhatsAppBusinessAccountPhoneNumberTrait
{
    /**
     * @param UpdateLinkedWhatsAppBusinessAccountPhoneNumberRequest $args
     * @return UpdateLinkedWhatsAppBusinessAccountPhoneNumberResponse
     */
    public function updateLinkedWhatsAppBusinessAccountPhoneNumber(UpdateLinkedWhatsAppBusinessAccountPhoneNumberRequest $args)
    {
        $result = parent::updateLinkedWhatsAppBusinessAccountPhoneNumber($args->toArray());
        return new UpdateLinkedWhatsAppBusinessAccountPhoneNumberResponse($result->toArray());
    }
}
