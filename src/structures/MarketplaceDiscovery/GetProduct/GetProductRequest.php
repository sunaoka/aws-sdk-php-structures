<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 */
class GetProductRequest extends Request
{
    /**
     * @param array{productId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
