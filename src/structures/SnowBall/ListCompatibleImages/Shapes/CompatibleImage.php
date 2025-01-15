<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListCompatibleImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmiId
 * @property string|null $Name
 */
class CompatibleImage extends Shape
{
    /**
     * @param array{
     *     AmiId?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
