<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $caseStudyCount
 */
class CaseStudiesSummary extends Shape
{
    /**
     * @param array{caseStudyCount: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
