<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExpectedCustomerSpend>|null $ExpectedCustomerSpend
 */
class AwsOpportunityProject extends Shape
{
    /**
     * @param array{ExpectedCustomerSpend?: list<ExpectedCustomerSpend>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
