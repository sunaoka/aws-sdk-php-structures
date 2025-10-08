<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DisassociateWhatsAppBusinessAccount;

trait DisassociateWhatsAppBusinessAccountTrait
{
    /**
     * @param DisassociateWhatsAppBusinessAccountRequest $args
     * @return DisassociateWhatsAppBusinessAccountResponse
     */
    public function disassociateWhatsAppBusinessAccount(DisassociateWhatsAppBusinessAccountRequest $args)
    {
        $result = parent::disassociateWhatsAppBusinessAccount($args->toArray());
        return new DisassociateWhatsAppBusinessAccountResponse($result->toArray());
    }
}
