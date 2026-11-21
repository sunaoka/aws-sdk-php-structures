<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UseCaseSummaryEntry> $useCases
 */
class UseCaseSummary extends Shape
{
    /**
     * @param array{useCases: list<UseCaseSummaryEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
