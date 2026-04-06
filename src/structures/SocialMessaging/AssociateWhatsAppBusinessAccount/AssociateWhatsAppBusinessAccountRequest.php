<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WhatsAppSignupCallback|null $signupCallback
 * @property Shapes\WhatsAppSetupFinalization|null $setupFinalization
 */
class AssociateWhatsAppBusinessAccountRequest extends Request
{
    /**
     * @param array{
     *     signupCallback?: Shapes\WhatsAppSignupCallback|null,
     *     setupFinalization?: Shapes\WhatsAppSetupFinalization|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
