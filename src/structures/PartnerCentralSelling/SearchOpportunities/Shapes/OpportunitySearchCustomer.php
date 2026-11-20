<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OpportunitySearchAccount|null $Account
 */
class OpportunitySearchCustomer extends Shape
{
    /**
     * @param array{Account?: OpportunitySearchAccount|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
