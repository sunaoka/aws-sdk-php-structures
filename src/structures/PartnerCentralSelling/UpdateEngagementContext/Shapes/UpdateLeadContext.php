<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QualificationStatus
 * @property LeadCustomer $Customer
 * @property LeadInteraction|null $Interaction
 */
class UpdateLeadContext extends Shape
{
    /**
     * @param array{
     *     QualificationStatus?: string|null,
     *     Customer: LeadCustomer,
     *     Interaction?: LeadInteraction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
