<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associateInProgressToken
 * @property array<string, LinkedWhatsAppBusinessAccountIdMetaData>|null $linkedAccountsWithIncompleteSetup
 */
class WhatsAppSignupCallbackResult extends Shape
{
    /**
     * @param array{
     *     associateInProgressToken?: string|null,
     *     linkedAccountsWithIncompleteSetup?: array<string, LinkedWhatsAppBusinessAccountIdMetaData>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
