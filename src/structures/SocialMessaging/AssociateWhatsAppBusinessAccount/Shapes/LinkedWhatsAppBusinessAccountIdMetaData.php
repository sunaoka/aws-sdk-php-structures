<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountName
 * @property 'COMPLETE'|'INCOMPLETE'|null $registrationStatus
 * @property list<WhatsAppPhoneNumberDetail>|null $unregisteredWhatsAppPhoneNumbers
 * @property string|null $wabaId
 */
class LinkedWhatsAppBusinessAccountIdMetaData extends Shape
{
    /**
     * @param array{
     *     accountName?: string|null,
     *     registrationStatus?: 'COMPLETE'|'INCOMPLETE'|null,
     *     unregisteredWhatsAppPhoneNumbers?: list<WhatsAppPhoneNumberDetail>|null,
     *     wabaId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
