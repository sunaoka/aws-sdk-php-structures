<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WhatsAppSignupCallback $signupCallback
 * @property Shapes\WhatsAppSetupFinalization $setupFinalization
 */
class AssociateWhatsAppBusinessAccountRequest extends Request
{
    /**
     * @param array{
     *     signupCallback?: Shapes\WhatsAppSignupCallback,
     *     setupFinalization?: Shapes\WhatsAppSetupFinalization
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
