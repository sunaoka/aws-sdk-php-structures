<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppCallPermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $originationPhoneNumberId
 * @property string|null $destinationPhoneNumber
 * @property string|null $endUserBsuid
 */
class GetWhatsAppCallPermissionRequest extends Request
{
    /**
     * @param array{
     *     originationPhoneNumberId: string,
     *     destinationPhoneNumber?: string|null,
     *     endUserBsuid?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
