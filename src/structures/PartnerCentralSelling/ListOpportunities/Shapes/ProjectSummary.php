<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null $DeliveryModels
 * @property list<ExpectedCustomerSpend>|null $ExpectedCustomerSpend
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     DeliveryModels?: list<'SaaS or PaaS'|'BYOL or AMI'|'Managed Services'|'Professional Services'|'Resell'|'Other'>|null,
     *     ExpectedCustomerSpend?: list<ExpectedCustomerSpend>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
