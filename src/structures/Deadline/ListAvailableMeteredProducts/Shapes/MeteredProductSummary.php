<?php

namespace Sunaoka\Aws\Structures\Deadline\ListAvailableMeteredProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productId
 * @property string $family
 * @property string $vendor
 * @property int<1024, 65535> $port
 */
class MeteredProductSummary extends Shape
{
    /**
     * @param array{
     *     productId: string,
     *     family: string,
     *     vendor: string,
     *     port: int<1024, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
