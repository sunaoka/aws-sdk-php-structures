<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProviderMarketplaceConfiguration|null $marketplaceConfiguration
 */
class ProviderEndpointConfiguration extends Shape
{
    /**
     * @param array{marketplaceConfiguration?: ProviderMarketplaceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
