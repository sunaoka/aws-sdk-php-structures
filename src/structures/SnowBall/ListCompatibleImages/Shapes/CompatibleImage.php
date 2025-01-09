<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListCompatibleImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmiId
 * @property string $Name
 */
class CompatibleImage extends Shape
{
    /**
     * @param array{
     *     AmiId?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
