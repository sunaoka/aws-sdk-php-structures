<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountIdentifier
 * @property AccountCustomer|null $Customer
 * @property list<SenderContact>|null $SenderContacts
 * @property PreferredContactWindow|null $PreferredContact
 */
class AccountPlanningInvitationPayload extends Shape
{
    /**
     * @param array{
     *     AccountIdentifier?: string|null,
     *     Customer?: AccountCustomer|null,
     *     SenderContacts?: list<SenderContact>|null,
     *     PreferredContact?: PreferredContactWindow|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
