<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount;

trait AssociateWhatsAppBusinessAccountTrait
{
    /**
     * @param AssociateWhatsAppBusinessAccountRequest $args
     * @return AssociateWhatsAppBusinessAccountResponse
     */
    public function associateWhatsAppBusinessAccount(AssociateWhatsAppBusinessAccountRequest $args)
    {
        $result = parent::associateWhatsAppBusinessAccount($args->toArray());
        return new AssociateWhatsAppBusinessAccountResponse($result->toArray());
    }
}
