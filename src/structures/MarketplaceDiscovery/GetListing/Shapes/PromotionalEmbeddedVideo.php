<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $url
 * @property string $preview
 * @property string $thumbnail
 * @property string|null $description
 */
class PromotionalEmbeddedVideo extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     url: string,
     *     preview: string,
     *     thumbnail: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
