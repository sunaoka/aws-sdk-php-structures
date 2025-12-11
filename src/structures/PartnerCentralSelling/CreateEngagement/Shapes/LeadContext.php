<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QualificationStatus
 * @property LeadCustomer $Customer
 * @property list<LeadInteraction> $Interactions
 */
class LeadContext extends Shape
{
    /**
     * @param array{
     *     QualificationStatus?: string|null,
     *     Customer: LeadCustomer,
     *     Interactions: list<LeadInteraction>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
