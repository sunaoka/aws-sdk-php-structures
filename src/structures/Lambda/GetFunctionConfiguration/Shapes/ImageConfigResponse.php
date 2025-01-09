<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfig $ImageConfig
 * @property ImageConfigError $Error
 */
class ImageConfigResponse extends Shape
{
    /**
     * @param array{
     *     ImageConfig?: ImageConfig,
     *     Error?: ImageConfigError
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
