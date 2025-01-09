<?php

namespace Sunaoka\Aws\Structures\Deadline\ListMeteredProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productId
 * @property string $family
 * @property string $vendor
 * @property int $port
 */
class MeteredProductSummary extends Shape
{
    /**
     * @param array{
     *     productId: string,
     *     family: string,
     *     vendor: string,
     *     port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
