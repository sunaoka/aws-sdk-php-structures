<?php

namespace Sunaoka\Aws\Structures\PI\DescribeDimensionKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Dimensions
 */
class ResponsePartitionKey extends Shape
{
    /**
     * @param array{Dimensions: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
