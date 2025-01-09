<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetLinkedWhatsAppBusinessAccountRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
