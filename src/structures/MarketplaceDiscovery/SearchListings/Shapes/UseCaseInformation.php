<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property string $value
 */
class UseCaseInformation extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
