<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associateInProgressToken
 * @property list<WabaPhoneNumberSetupFinalization> $phoneNumbers
 * @property string|null $phoneNumberParent
 * @property WabaSetupFinalization|null $waba
 */
class WhatsAppSetupFinalization extends Shape
{
    /**
     * @param array{
     *     associateInProgressToken: string,
     *     phoneNumbers: list<WabaPhoneNumberSetupFinalization>,
     *     phoneNumberParent?: string|null,
     *     waba?: WabaSetupFinalization|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
