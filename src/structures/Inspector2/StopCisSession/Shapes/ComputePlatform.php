<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vendor
 * @property string|null $product
 * @property string|null $version
 */
class ComputePlatform extends Shape
{
    /**
     * @param array{
     *     vendor?: string|null,
     *     product?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
