<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfig|null $ImageConfig
 * @property ImageConfigError|null $Error
 */
class ImageConfigResponse extends Shape
{
    /**
     * @param array{
     *     ImageConfig?: ImageConfig|null,
     *     Error?: ImageConfigError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
