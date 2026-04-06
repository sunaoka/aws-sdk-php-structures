<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 */
class WhatsAppSignupCallback extends Shape
{
    /**
     * @param array{accessToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
