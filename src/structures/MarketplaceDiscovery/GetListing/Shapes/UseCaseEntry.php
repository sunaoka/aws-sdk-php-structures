<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UseCase $useCase
 */
class UseCaseEntry extends Shape
{
    /**
     * @param array{useCase: UseCase} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
