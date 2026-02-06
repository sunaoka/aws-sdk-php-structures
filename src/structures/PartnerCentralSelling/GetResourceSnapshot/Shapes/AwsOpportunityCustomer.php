<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Contact>|null $Contacts
 */
class AwsOpportunityCustomer extends Shape
{
    /**
     * @param array{Contacts?: list<Contact>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
