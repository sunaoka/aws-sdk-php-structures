<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountSummary $Account
 */
class CustomerSummary extends Shape
{
    /**
     * @param array{Account?: AccountSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
