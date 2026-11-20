<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $Score
 */
class OpportunitySearchOpportunityQuality extends Shape
{
    /**
     * @param array{Score?: int<0, 100>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
