<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 * @property string|null $callbackUrl
 */
class WhatsAppSignupCallback extends Shape
{
    /**
     * @param array{
     *     accessToken: string,
     *     callbackUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
