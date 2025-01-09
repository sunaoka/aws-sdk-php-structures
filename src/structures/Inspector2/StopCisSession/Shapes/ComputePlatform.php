<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $product
 * @property string $vendor
 * @property string $version
 */
class ComputePlatform extends Shape
{
    /**
     * @param array{
     *     product?: string,
     *     vendor?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
