<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetLinkedWhatsAppBusinessAccountPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetLinkedWhatsAppBusinessAccountPhoneNumberRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
