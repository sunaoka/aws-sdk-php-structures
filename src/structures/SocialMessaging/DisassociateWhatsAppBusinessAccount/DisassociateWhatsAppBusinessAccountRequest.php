<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DisassociateWhatsAppBusinessAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DisassociateWhatsAppBusinessAccountRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
