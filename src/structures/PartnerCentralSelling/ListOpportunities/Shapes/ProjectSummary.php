<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'> $DeliveryModels
 * @property list<ExpectedCustomerSpend> $ExpectedCustomerSpend
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     DeliveryModels?: list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>,
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
