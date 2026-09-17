<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateLinkedWhatsAppBusinessAccountPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\WhatsAppCallSettings $callSettings
 */
class UpdateLinkedWhatsAppBusinessAccountPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     callSettings: Shapes\WhatsAppCallSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
