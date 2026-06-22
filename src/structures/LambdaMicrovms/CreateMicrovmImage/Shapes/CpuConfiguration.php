<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARM_64' $architecture
 */
class CpuConfiguration extends Shape
{
    /**
     * @param array{architecture: 'ARM_64'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
