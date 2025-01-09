<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountName
 * @property 'COMPLETE'|'INCOMPLETE' $registrationStatus
 * @property list<WhatsAppPhoneNumberDetail> $unregisteredWhatsAppPhoneNumbers
 * @property string $wabaId
 */
class LinkedWhatsAppBusinessAccountIdMetaData extends Shape
{
    /**
     * @param array{
     *     accountName?: string,
     *     registrationStatus?: 'COMPLETE'|'INCOMPLETE',
     *     unregisteredWhatsAppPhoneNumbers?: list<WhatsAppPhoneNumberDetail>,
     *     wabaId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
