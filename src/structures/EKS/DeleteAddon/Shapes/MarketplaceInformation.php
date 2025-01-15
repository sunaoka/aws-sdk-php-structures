<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAddon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $productId
 * @property string|null $productUrl
 */
class MarketplaceInformation extends Shape
{
    /**
     * @param array{
     *     productId?: string|null,
     *     productUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
