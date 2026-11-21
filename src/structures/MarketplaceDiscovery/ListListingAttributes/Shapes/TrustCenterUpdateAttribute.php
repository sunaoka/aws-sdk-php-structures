<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListListingAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $description
 * @property \Aws\Api\DateTimeResult $publishedTime
 */
class TrustCenterUpdateAttribute extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     description: string,
     *     publishedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
