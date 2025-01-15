<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Min
 * @property int<0, max>|null $Max
 */
class AcceleratorCountRequest extends Shape
{
    /**
     * @param array{
     *     Min?: int<0, max>|null,
     *     Max?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
