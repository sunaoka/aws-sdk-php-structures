<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associateInProgressToken
 * @property array<string, LinkedWhatsAppBusinessAccountIdMetaData> $linkedAccountsWithIncompleteSetup
 */
class WhatsAppSignupCallbackResult extends Shape
{
    /**
     * @param array{
     *     associateInProgressToken?: string,
     *     linkedAccountsWithIncompleteSetup?: array<string, LinkedWhatsAppBusinessAccountIdMetaData>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
