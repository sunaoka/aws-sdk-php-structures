<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $family
 * @property int<1024, 65535> $port
 * @property string $productId
 * @property string $vendor
 */
class MeteredProductSummary extends Shape
{
    /**
     * @param array{
     *     family: string,
     *     port: int<1024, 65535>,
     *     productId: string,
     *     vendor: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
