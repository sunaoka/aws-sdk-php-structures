<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmAuthToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $startPort
 * @property int<1, 65535> $endPort
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     startPort: int<1, 65535>,
     *     endPort: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
