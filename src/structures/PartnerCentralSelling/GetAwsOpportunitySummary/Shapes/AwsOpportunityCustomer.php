<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Contact> $Contacts
 */
class AwsOpportunityCustomer extends Shape
{
    /**
     * @param array{Contacts?: list<Contact>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
