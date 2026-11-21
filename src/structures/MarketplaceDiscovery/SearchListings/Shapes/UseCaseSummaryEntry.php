<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UseCaseInformation $useCase
 */
class UseCaseSummaryEntry extends Shape
{
    /**
     * @param array{useCase: UseCaseInformation} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
