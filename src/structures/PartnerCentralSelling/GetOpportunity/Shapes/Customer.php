<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Account|null $Account
 * @property list<Contact>|null $Contacts
 */
class Customer extends Shape
{
    /**
     * @param array{
     *     Account?: Account|null,
     *     Contacts?: list<Contact>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
