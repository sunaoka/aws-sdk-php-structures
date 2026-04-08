<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PromotionalEmbeddedImage|null $embeddedImage
 * @property PromotionalEmbeddedVideo|null $embeddedVideo
 */
class PromotionalMedia extends Shape
{
    /**
     * @param array{
     *     embeddedImage?: PromotionalEmbeddedImage|null,
     *     embeddedVideo?: PromotionalEmbeddedVideo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
