<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExpectedCustomerSpend>|null $ExpectedCustomerSpend
 * @property 'aws-eusc'|null $AwsPartition
 */
class AwsOpportunityProject extends Shape
{
    /**
     * @param array{
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>|null,
     *     AwsPartition?: 'aws-eusc'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
