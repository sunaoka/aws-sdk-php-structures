<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Account $Account
 * @property list<Contact> $Contacts
 */
class Customer extends Shape
{
    /**
     * @param array{
     *     Account?: Account,
     *     Contacts?: list<Contact>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
