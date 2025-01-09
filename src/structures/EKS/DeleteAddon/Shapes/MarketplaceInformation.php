<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productId
 * @property string $productUrl
 */
class MarketplaceInformation extends Shape
{
    /**
     * @param array{
     *     productId?: string,
     *     productUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
