<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetProviderService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProviderMarketplaceConfiguration $marketplaceConfiguration
 */
class ProviderEndpointConfiguration extends Shape
{
    /**
     * @param array{marketplaceConfiguration?: ProviderMarketplaceConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
